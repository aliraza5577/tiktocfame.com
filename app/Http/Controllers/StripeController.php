<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Stripe\Stripe;
use App\Models\SubCategoryModel;

class StripeController extends Controller
{
    public function processPayment(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'amount' => 'required|numeric|min:0.50',
                'product_id' => 'required',
                'username' => 'required'
            ]);

            // Get product to check service type
            $product = \App\Models\ProductModel::find($validatedData['product_id']);

            // Only store video URLs if service type is likes or views
            if ($product && in_array($product->service_type, ['likes', 'views'])) {
                if ($request->has('video_urls') && !empty($request->video_urls)) {
                    session(['video_urls' => $request->video_urls]);
                }
            } else {
                // Clear any existing video URLs from session for other service types
                session()->forget('video_urls');
            }

            Stripe::setApiKey(config('services.stripe.secret'));

            $amount = (int)($validatedData['amount'] * 100);

            // Create a checkout session with customer email collection
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'TikTok Service for @' . $validatedData['username'],
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('payment.cancel'),
                'customer_email' => $request->input('email', null), // Try to get email from request
                'metadata' => [
                    'username' => $validatedData['username'],
                    'product_id' => $validatedData['product_id'],
                    'email' => $request->input('email', null) // Store email in metadata as backup
                ],
                'billing_address_collection' => 'required', // Collect billing address which includes email
            ]);

            // \Log::info('Stripe Session Created:', ['session_id' => $session->id]);

            // If this is an AJAX request
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'redirect' => $session->url
                ]);
            }

            // For regular form submission
            return redirect($session->url);

        } catch (\Exception $e) {
            // \Log::error('Stripe Payment Error:', [
            //     'error' => $e->getMessage(),
            //     'request_data' => $request->all()
            // ]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage()
                ], 500);
            }

            return back()->with('error', $e->getMessage());
        }
    }

    public function success(Request $request)
    {
        // \Log::info('Payment Success:', $request->all());

        $sessionId = $request->get('session_id');

        if ($sessionId) {
            Stripe::setApiKey(config('services.stripe.secret'));

            // Retrieve the session with expanded customer details
            $session = \Stripe\Checkout\Session::retrieve([
                'id' => $sessionId,
                'expand' => ['payment_intent', 'customer']
            ]);

            // \Log::info('Stripe Session Details:', ['session' => $session]);

            // Generate unique order number
            $orderNumber = 'TF-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));

            // Get customer email from Stripe checkout
            $customerEmail = null;

            // Try to get email from customer object
            if (!empty($session->customer) && !empty($session->customer->email)) {
                $customerEmail = $session->customer->email;
                // \Log::info('Using email from Stripe customer:', ['email' => $customerEmail]);
            }
            // Try to get from metadata
            else if (!empty($session->metadata->email)) {
                $customerEmail = $session->metadata->email;
                // \Log::info('Using email from metadata:', ['email' => $customerEmail]);
            }
            // Try to get from session
            else if (session()->has('checkout_email')) {
                $customerEmail = session('checkout_email');
                // \Log::info('Using email from session:', ['email' => $customerEmail]);
            }
            // Fallback to default only if all else fails
            else {
                $customerEmail = 'customer@example.com';
                // \Log::info('Using default email as no email found');
            }

            // Get product details to retrieve service_type
            $product = \App\Models\ProductModel::find($session->metadata->product_id);
            $serviceType = $product ? $product->service_type : null;

            // Create order in database
            $order = new Order();
            $order->product_id = $session->metadata->product_id;
            $order->username = $session->metadata->username;
            $order->orderNumber = $orderNumber;
            $order->email = $customerEmail;
            $order->transactionId = $session->payment_intent->id;
            $order->amount = $session->amount_total / 100;
            $order->service_type = $serviceType; // Add service_type from product
            $order->status = 'pending';

            // Only store video URLs in linkMeta for likes and views service types
            if ($serviceType && in_array($serviceType, ['likes', 'views'])) {
                if (session()->has('video_urls') && !empty(session('video_urls'))) {
                    $order->linkMeta = session('video_urls');
                }
            }

            $order->save();

            // Clear session data after order is created
            session()->forget(['video_urls', 'checkout_email']);

            // \Log::info('Order Created:', ['order' => $order->toArray()]);

            return view('payment.success', [
                'order' => $order,
                'getSubCategories' => SubCategoryModel::getActiveRecord(),
                'meta_title' => "Payment Success - TikTok Fame",
                'meta_keyword' => "Payment Success - TikTok Fame",
                'meta_desc' => "Payment Success - TikTok Fame",
                'seo_schema' => "Payment Success - TikTok Fame",
            ]);
        }

        return view('payment.success', [
            'getSubCategories' => SubCategoryModel::getActiveRecord(),
            'meta_title' => "Payment Success - TikTok Fame",
            'meta_keyword' => "Payment Success - TikTok Fame",
            'meta_desc' => "Payment Success - TikTok Fame",
            'seo_schema' => "Payment Success - TikTok Fame",
        ]);
    }

    public function cancel()
    {
        return view('payment.cancel', [
            'getSubCategories' => SubCategoryModel::getActiveRecord(),
            'meta_title' => "Payment Cancelled - TikTok Fame",
            'meta_keyword' => "Payment Cancelled - TikTok Fame",
            'meta_desc' => "Payment Cancelled - TikTok Fame",
            'seo_schema' => "Payment Cancelled - TikTok Fame",
        ]);
    }
}
