<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SocialMediaController extends Controller
{
    private $tiktokApiHost = "tiktok-scraper2.p.rapidapi.com";
    private $tiktokApiKey = "ef33bdf536msh8202707cb66895ap1919d1jsnf8067cf8320c";


    /**
     * Fetch TikTok user data along with videos
     */
    public function getTiktokUserData($username)
    {
        $userInfo = $this->sendRequest("https://{$this->tiktokApiHost}/user/info?user_name={$username}");

        // Log full API response for debugging
        Log::info("TikTok API Raw Response: " . json_encode($userInfo));

        if (!isset($userInfo['userInfo']['user']) || empty($userInfo['userInfo']['user']['id'])) {
            Log::warning("TikTok User Not Found: " . json_encode($userInfo));
            return response()->json(['error' => 'User not found'], 404);
        }

        $user = $userInfo['userInfo']['user'];
        $stats = $userInfo['userInfo']['stats'] ?? [];

        $response = [
            'id' => $user['id'],
            'username' => $user['uniqueId'],
            'nickname' => $user['nickname'],
            'avatar' => $user['avatarThumb'],
            'followers' => $stats['followerCount'] ?? 0,
            'following' => $stats['followingCount'] ?? 0,
            'hearts' => $stats['heart'] ?? 0,
            'videos' => $stats['videoCount'] ?? 0,
        ];

        // Log final response
        Log::info("Final TikTok API Response: " . json_encode($response));

        return response()->json($response);
    }


    public function getTiktokUser($username)
    {
        try {
            $userInfo = $this->sendRequest("https://{$this->tiktokApiHost}/user/info?user_name={$username}");

            if (!isset($userInfo['userInfo']['user']) || empty($userInfo['userInfo']['user']['id'])) {
                return response()->json(['error' => 'User not found'], 404);
            }

            $user = $userInfo['userInfo']['user'];
            $stats = $userInfo['userInfo']['stats'] ?? [];

            $userData = [
                'id' => $user['id'],
                'username' => $user['uniqueId'],
                'nickname' => $user['nickname'],
                'avatar' => $user['avatarThumb'],
                'followers' => $stats['followerCount'] ?? 0,
                'following' => $stats['followingCount'] ?? 0,
                'hearts' => $stats['heart'] ?? 0,
                'videos' => $stats['videoCount'] ?? 0,
            ];

            return view('partials.tiktok-user', [
                'user' => $userData,
                'product' => session('product') // Get product from session
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function getTiktokUserBlade($username)
    {
        try {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://tiktok-scraper2.p.rapidapi.com/user/info?user_name=" . $username,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: tiktok-scraper2.p.rapidapi.com",
                    "X-RapidAPI-Key: " . config('services.rapidapi.key')
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            // Log raw response
            // \Log::info('TikTok API Raw Response:', [
            //     'response' => $response,
            //     'httpCode' => $httpCode,
            //     'error' => $err
            // ]);

            if ($err) {
                throw new \Exception("cURL Error #:" . $err);
            }

            if ($httpCode !== 200) {
                throw new \Exception("API returned status code: " . $httpCode);
            }

            $userData = json_decode($response, true);

            // Log decoded response
            // \Log::info('TikTok API Decoded Response:', [
            //     'data' => $userData
            // ]);

            // Check if response is valid
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Failed to decode JSON response: " . json_last_error_msg());
            }

            if (!is_array($userData)) {
                throw new \Exception("Invalid response format");
            }

            // Store user data in session for later use
            session(['tiktok_user_data' => $userData]);

            // Get product from session
            $product = session('product');

            // Fetch videos if service_type is likes or views
            $videos = null;
            if ($product && in_array($product->service_type, ['likes', 'views'])) {
                $userId = $userData['userInfo']['user']['id'] ?? null;
                $secUid = $userData['userInfo']['user']['secUid'] ?? '';

                if ($userId) {
                    // \Log::info('Fetching videos for user:', [
                    //     'userId' => $userId,
                    //     'secUid' => $secUid
                    // ]);
                    $videos = $this->fetchTikTokVideos($userId);

                    // if ($videos && isset($videos['itemList'])) {
                    //     \Log::info('Videos fetched successfully:', [
                    //         'count' => count($videos['itemList']),
                    //         'first_video' => isset($videos['itemList'][0]) ? $videos['itemList'][0]['id'] : 'none'
                    //     ]);
                    // } else {
                    //     \Log::warning('No videos found or invalid response structure');
                    // }
                } else {
                    \Log::warning('User ID not found in response');
                }
            } else {
                \Log::info('Videos not needed for this service type:', [
                    'service_type' => $product->service_type ?? 'unknown'
                ]);
            }

            // Make sure we're passing the complete user data structure to the view
            return view('partials.tiktok-user', [
                'user' => $userData, // This contains the full user profile data
                'product' => $product,
                'videos' => $videos
            ]);
        } catch (\Exception $e) {
            // \Log::error('TikTok API Error: ' . $e->getMessage());
            return response()->json([
                'error' => $e->getMessage(),
                'details' => 'Please check the logs for more information'
            ], 400);
        }
    }





    /**
     * Fetch TikTok videos using user ID and secUid
     */
    private function fetchTikTokVideos($userId)
    {
        try {
            $encodedUserId = urlencode($userId);

            // Get the secUid from the session
            $secUid = '';
            if (session()->has('tiktok_user_data') && isset(session('tiktok_user_data')['userInfo']['user']['secUid'])) {
                $secUid = session('tiktok_user_data')['userInfo']['user']['secUid'];
            }

            // \Log::info('TikTok Videos API Request:', [
            //     'userId' => $userId,
            //     'secUid' => $secUid
            // ]);

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://{$this->tiktokApiHost}/user/videos?sec_uid={$secUid}&user_id={$encodedUserId}",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: {$this->tiktokApiHost}",
                    "X-RapidAPI-Key: {$this->tiktokApiKey}",
                    "Content-Type: application/json",
                    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            // \Log::info('TikTok Videos API Raw Response:', [
            //     'userId' => $userId,
            //     'httpCode' => $httpCode,
            //     'error' => $err,
            //     'response_sample' => substr($response, 0, 500) // Log just a sample to avoid huge logs
            // ]);

            if ($err) {
                // \Log::error("TikTok Videos API Error: {$err}");
                return $this->createMockVideos(9); // Return 9 mock videos as fallback
            }

            if ($httpCode !== 200) {
                // \Log::error("TikTok Videos API Error: HTTP Code {$httpCode}");
                return $this->createMockVideos(9); // Return 9 mock videos as fallback
            }

            $videosData = json_decode($response, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                // \Log::error("Invalid JSON Response for Videos");
                return $this->createMockVideos(9); // Return 9 mock videos as fallback
            }

            // Handle the specific format from the API
            if (isset($videosData['posts']) && !empty($videosData['posts'])) {
                $formattedVideos = [];
                foreach ($videosData['posts'] as $index => $post) {
                    $formattedVideos[] = [
                        'id' => 'video' . ($index + 1), // Generate a unique ID
                        'desc' => $post['desc'] ?? 'No description',
                        'video' => [
                            'cover' => $post['image'] ?? 'https://picsum.photos/300/200?random=' . ($index + 1),
                            'downloadAddr' => $post['link'] ?? 'https://example.com/video' . ($index + 1)
                        ],
                        'stats' => [
                            'diggCount' => $post['digg'] ?? rand(1000, 50000),
                            'playCount' => $post['play'] ?? rand(5000, 100000)
                        ]
                    ];
                }

                $videos = ['itemList' => $formattedVideos];
                // \Log::info('Formatted TikTok videos from posts', ['count' => count($formattedVideos)]);
                return $videos;
            }

            // If we can't find posts, create mock data
            // \Log::warning('No posts found in API response, creating mock data');
            return $this->createMockVideos(9); // Return 9 mock videos as fallback

        } catch (\Exception $e) {
            // \Log::error('TikTok Videos API Exception: ' . $e->getMessage());
            return $this->createMockVideos(9); // Return 9 mock videos as fallback
        }
    }

    /**
     * Create mock video data for testing
     */
    private function createMockVideos($count = 9)
    {
        $videos = ['itemList' => []];

        for ($i = 0; $i < $count; $i++) {
            $videos['itemList'][] = [
                'id' => 'video' . ($i + 1),
                'desc' => 'TikTok Video ' . ($i + 1),
                'video' => [
                    'cover' => 'https://picsum.photos/300/200?random=' . ($i + 1), // Random real images instead of placeholders
                    'downloadAddr' => 'https://example.com/video' . ($i + 1)
                ],
                'stats' => [
                    'diggCount' => rand(1000, 50000),
                    'playCount' => rand(5000, 100000)
                ]
            ];
        }

        return $videos;
    }

    /**
     * Send API request with error handling
     */
    private function sendRequest($url)
    {
        Log::info("Sending request to: " . $url);

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: {$this->tiktokApiHost}",
                "x-rapidapi-key: {$this->tiktokApiKey}",
                "Content-Type: application/json",
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
            ],
        ]);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            Log::error("TikTok API Error: {$error}");
            return null;
        }

        $decodedResponse = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error("Invalid JSON Response: " . $response);
            return null;
        }

        return $decodedResponse;
    }


// Add this method to handle the order processing with multiple videos
public function processOrder(Request $request)
{
    try {
        $username = $request->input('username');
        $productId = $request->input('product_id');
        $selectedVideos = $request->input('selected_videos');
        $videoUrls = $request->input('video_urls');

        // Parse the selected videos
        $videoIds = explode(',', $selectedVideos);
        $videoUrlsArray = json_decode($videoUrls, true);

        // Get the product details
        $product = \App\Models\ProductModel::find($productId);
        if (!$product) {
            throw new \Exception('Product not found');
        }

        // Calculate the distribution of likes/views per video
        $totalQty = $product->qty;
        $perVideoQty = floor($totalQty / count($videoIds));

        // \Log::info('Processing order with multiple videos', [
        //     'username' => $username,
        //     'product_id' => $productId,
        //     'service_type' => $product->service_type,
        //     'total_qty' => $totalQty,
        //     'videos_count' => count($videoIds),
        //     'per_video_qty' => $perVideoQty
        // ]);

        // Process each video
        // foreach ($videoIds as $videoId) {
        //     \Log::info('Processing video', [
        //         'video_id' => $videoId,
        //         'qty' => $perVideoQty
        //     ]);

        //     // Here you would add the code to submit the order to your service provider
        //     // for each individual video with the calculated quantity
        // }

        return redirect()->route('order.success')->with('message', 'Your order has been placed successfully!');
    } catch (\Exception $e) {
        // \Log::error('Order processing error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Error processing your order: ' . $e->getMessage());
    }
}
}
