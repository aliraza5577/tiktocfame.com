<?php
$userData = $user['userInfo']['user'] ?? [];
$userStats = $user['userInfo']['stats'] ?? [];
?>

@if(isset($userData['uniqueId']))
    <script>
        // Initialize global arrays
        window.selectedVideos = [];
        window.selectedVideoUrls = [];

        // Create global namespace if not already defined
        window.TikTokSelect = window.TikTokSelect || {};

        // Configuration setup
        TikTokSelect.config = {
            maxSelections: 5,
            totalQty: typeof product !== 'undefined' ? product.qty : 0
        };

        // Ensure script initializes only once
        if (!TikTokSelect.initialized) {
            TikTokSelect.initialized = true;

            /**
             * Handles video selection/deselection logic
             */
            TikTokSelect.selectVideo = function(videoId, videoUrl, cardElement) {
                const isSelected = cardElement.classList.contains('selected');
                const index = window.selectedVideos.indexOf(videoId);

                if (isSelected) {
                    // Deselect video
                    cardElement.classList.remove('selected');
                    if (index > -1) {
                        window.selectedVideos.splice(index, 1);
                        window.selectedVideoUrls = window.selectedVideoUrls.filter(item => item.id !== videoId);
                    }
                } else {
                    // Check selection limit
                    if (window.selectedVideos.length >= TikTokSelect.config.maxSelections) {
                        alert(`Maximum ${TikTokSelect.config.maxSelections} videos allowed`);
                        return;
                    }
                    // Select video
                    cardElement.classList.add('selected');
                    window.selectedVideos.push(videoId);
                    window.selectedVideoUrls.push({ id: videoId, url: videoUrl });
                }

                TikTokSelect.updateSelectedInfo(); // Update UI
            };

            /**
             * Updates selected video count & form inputs
             */
            TikTokSelect.updateSelectedInfo = function() {
                const count = window.selectedVideos.length;
                const selectedCountElement = document.getElementById('selected-count');
                const selectedVideosInput = document.getElementById('selected_videos_input');
                const selectedVideoUrlsInput = document.getElementById('selected_video_urls');

                if (selectedCountElement) selectedCountElement.textContent = count;
                if (selectedVideosInput) selectedVideosInput.value = window.selectedVideos.join(',');
                if (selectedVideoUrlsInput) selectedVideoUrlsInput.value = JSON.stringify(window.selectedVideoUrls);

                // Update per-post distribution if applicable
                if (TikTokSelect.config.totalQty > 0) {
                    const perPost = count > 0 ? Math.floor(TikTokSelect.config.totalQty / count) : 0;
                    const perPostCountElement = document.getElementById('per-post-count');
                    if (perPostCountElement) perPostCountElement.textContent = perPost;
                }
            };

            /**
             * Initializes event listeners
             */
            TikTokSelect.init = function() {
                // Delegate video card clicks
                document.addEventListener('click', function(e) {
                    const card = e.target.closest('.video-card');
                    if (card) {
                        const videoId = card.dataset.videoId;
                        const videoUrl = card.dataset.videoUrl;
                        if (videoId) TikTokSelect.selectVideo(videoId, videoUrl, card);
                    }
                });

                // Validate form submission
                const paymentForm = document.getElementById('payment-form');
                if (paymentForm) {
                    paymentForm.addEventListener('submit', function(e) {
                        if (window.selectedVideos.length === 0) {
                            e.preventDefault();
                            alert('Please select at least one video.');
                        }
                    });
                }

                // Initialize selected info display
                TikTokSelect.updateSelectedInfo();
            };

            // Run initialization on DOM ready
            if (document.readyState !== 'loading') {
                TikTokSelect.init();
            } else {
                document.addEventListener('DOMContentLoaded', () => TikTokSelect.init());
            }
        }
    </script>

    {{-- Rest of your HTML remains unchanged --}}
    <div style="text-align: center; margin-bottom: 20px;">
        <?php
            // Convert HEIC URL to JPEG if possible
            $avatarUrl = !empty($userData['avatarThumb']) ? $userData['avatarThumb'] : '';
            $avatarUrl = str_replace('.heic', '.jpeg', $avatarUrl);
        ?>
        <img src="{{ $avatarUrl }}"
             alt="{{ $userData['uniqueId'] ?? 'User' }}"
             onerror="this.onerror=null; this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIj48cmVjdCB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0iI2UxZTFlMSIvPjxjaXJjbGUgY3g9IjUwIiBjeT0iMzYiIHI9IjIwIiBmaWxsPSIjYjViNWI1Ii8+PHBhdGggZD0iTTI1LDg1IGE0MCw0MCAwIDAsMSA1MCwwIiBmaWxsPSIjYjViNWI1Ii8+PC9zdmc+';"
             style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #fff;">
    </div>
    <div class="userInfoWrap text-center">
        <div class="row gy-5">
            {{-- <div class="col-md-4 col-6">
                <h3><strong>Username</strong></h3>
                <p>{{ $userData['uniqueId'] }}</p>
            </div>
            <div class="col-md-4 col-6">
                <h3><strong>Nickname</strong></h3>
                <p>{{ $userData['nickname'] }}</p>
            </div> --}}
            <div class="col-md-4 col-6">
                <h3><strong>Followers</strong></h3>
                <p>{{ $userStats['followerCount'] ?? 0 }}</p>
            </div>
            <div class="col-md-4 col-6">
                <h3><strong>Following</strong></h3>
                <p>{{ $userStats['followingCount'] ?? 0 }}</p>
            </div>
            {{-- <div class="col-md-4 col-6">
                <h3><strong>Hearts</strong></h3>
                <p>{{ $userStats['heart'] ?? 0 }}</p>
            </div>
            <div class="col-md-4 col-6">
                <h3><strong>Videos</strong></h3>
                <p>{{ $userStats['videoCount'] ?? 0 }}</p>
            </div> --}}
        </div>
    </div>

    <style>
        .video-card {
            cursor: pointer !important;
            border: 2px solid transparent !important;
            position: relative !important;
            transition: all 0.3s ease !important;
            background-color: #fff !important;
            overflow: hidden !important;
        }
        .video-card:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .video-card.selected {
            border-color: #ff4d4f !important;
        }
        .video-select-overlay {
            z-index: 10 !important;
            opacity: 0.9 !important;
            display: none !important;
            position: absolute !important;
            top: 10px !important;
            right: 10px !important;
            background: #ff4d4f !important;
            color: white !important;
            border-radius: 50% !important;
            width: 20px !important;
            height: 20px !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 11px;
        }
        .video-card.selected .video-select-overlay {
            display: flex !important;
        }

        /* Spinner styles */
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-left: 10px;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .d-none {
            display: none !important;
        }

        /* Order summary styles */
        .order-summary {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            color: #333;
        }
        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .order-total {
            display: flex;
            justify-content: space-between;
            padding: 15px 0 5px;
            font-weight: bold;
            font-size: 18px;
        }

        /* Upsell options styles */
        .upsell-container {
            margin: 20px 0;
        }
        .upsell-item {
            background-color: #023047;
            color: white;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .upsell-info {
            display: flex;
            align-items: center;
        }
        .upsell-icon {
            margin-right: 15px;
            font-size: 20px;
        }
        .upsell-price {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .original-price {
            text-decoration: line-through;
            opacity: 0.7;
            font-size: 14px;
        }
        .discount-price {
            font-weight: bold;
            font-size: 18px;
        }
        .discount-badge {
            position: absolute;
            top: -10px;
            right: 10px;
            background-color: #ff4d4f;
            color: white;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .add-upsell-btn {
            background-color: white;
            color: #00c851;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 15px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }
    </style>

    @if(isset($product) && in_array($product->service_type, ['likes', 'views']) && isset($videos) && isset($videos['itemList']))
    <div class="videos-section mt-4">
        <h3 class="text-center mb-3">Select posts</h3>
        <div class="selected-info text-center mb-3" id="selected-info">
            <span id="selected-count">0</span> posts selected / <span id="per-post-count">{{ $product->qty }}</span> {{ $product->service_type }} per post
        </div>
        <input type="hidden" id="total-qty" value="{{ $product->qty }}">
        <div class="row postsWrap">
            @foreach($videos['itemList'] as $index => $video)
                @if($index < 12)
                <div class="col-md-4 col-6 mb-3">
                    <div class="card video-card"
                         id="video-card-{{ $index }}"
                         data-video-id="{{ $video['id'] }}"
                         data-video-url="{{ $video['video']['downloadAddr'] ?? '' }}">
                        <div class="video-select-overlay">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="card-body text-center position-relative">
                            <img src="{{ str_replace('http://', 'https://', $video['video']['cover'] ?? '') }}"
                                 alt="Video thumbnail"
                                 class="img-fluid"
                                 style="height: 200px; object-fit: cover; width: 100%;">
                            <p class="card-text">
                                <span class="post-likes">
                                    <i class="fas fa-heart"></i> {{ number_format($video['stats']['diggCount'] ?? 0) }}
                                </span>
                                <span class="post-views">
                                    <i class="fas fa-eye ml-2"></i> {{ number_format($video['stats']['playCount'] ?? 0) }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    @endif

    <!-- Order Summary Section -->
    <div class="order-summary">
        <div class="order-item">
            <div>
                <i class="fas fa-{{ $product->service_type == 'followers' ? 'user' : ($product->service_type == 'views' ? 'eye' : 'heart') }}"></i>
                {{ $product->name }}
            </div>
            <div>${{ $product->sale_price }}</div>
        </div>
        <div class="order-total">
            <div>Total to pay</div>
            <div id="total-price">${{ $product->sale_price }}</div>
        </div>
    </div>

    <!-- Upsell Options Section -->
    <div class="upsell-container">
        @php
            // Get related products for upsells
            $upsellProducts = [];

            // Add 500 followers if available
            $followersProduct = App\Models\ProductModel::where('service_type', 'followers')
                ->where('qty', 500)
                ->first();
            if ($followersProduct) {
                $upsellProducts[] = [
                    'id' => $followersProduct->id,
                    'name' => 'Add 500 followers',
                    'icon' => 'user',
                    'original_price' => $followersProduct->sale_price,
                    'discount_price' => round($followersProduct->sale_price * 0.75, 2) // 25% off
                ];
            }

            // Add 1K followers if available
            $followersProduct1k = App\Models\ProductModel::where('service_type', 'followers')
                ->where('qty', 1000)
                ->first();
            if ($followersProduct1k) {
                $upsellProducts[] = [
                    'id' => $followersProduct1k->id,
                    'name' => 'Add 1K followers',
                    'icon' => 'user',
                    'original_price' => $followersProduct1k->sale_price,
                    'discount_price' => round($followersProduct1k->sale_price * 0.75, 2) // 25% off
                ];
            }

            // Add 1K likes if available
            $likesProduct = App\Models\ProductModel::where('service_type', 'likes')
                ->where('qty', 1000)
                ->first();
            if ($likesProduct) {
                $upsellProducts[] = [
                    'id' => $likesProduct->id,
                    'name' => 'Add 1K likes',
                    'icon' => 'heart',
                    'original_price' => $likesProduct->sale_price,
                    'discount_price' => round($likesProduct->sale_price * 0.75, 2) // 25% off
                ];
            }
        @endphp

        @foreach($upsellProducts as $upsell)
        <div class="upsell-item" id="upsell-item-{{ $upsell['id'] }}">
            <div class="discount-badge">Save 25%</div>
            <div class="upsell-info">
                <i class="fas fa-{{ $upsell['icon'] }} upsell-icon"></i>
                <div>{{ $upsell['name'] }}</div>
            </div>
            <div class="d-flex align-items-center">
                <div class="upsell-price">
                    <div class="original-price">${{ $upsell['original_price'] }}</div>
                    <div class="discount-price">${{ $upsell['discount_price'] }}</div>
                </div>
                <button class="add-upsell-btn" data-id="{{ $upsell['id'] }}" data-price="{{ $upsell['discount_price'] }}" data-added="false">+</button>
            </div>
        </div>
        @endforeach
    </div>

    <div class="payment-section text-center mt-4">
        <form action="{{ route('stripe.payment') }}" method="POST" id="payment-form"
              data-service-type="{{ $product->service_type ?? '' }}">
            @csrf
            <input type="hidden" name="username" value="{{ $userData['uniqueId'] ?? '' }}">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="amount" value="{{ $product->sale_price }}" id="amount-input">
            <input type="hidden" name="upsell_products" id="upsell_products_input" value="">
            <input type="hidden" name="total_price" id="total-price-input" value="{{ $product->sale_price }}">
            @if(isset($product) && in_array($product->service_type, ['likes', 'views']))
            <input type="hidden" name="selected_videos" id="selected_videos_input" value="">
            <input type="hidden" name="video_urls" id="selected_video_urls" value="">
            @endif

            <button type="submit" class="btn btn-custom w-100 py-2" id="submit-button">
                <span id="button-text">Place Order</span>
                <div class="spinner d-none" id="spinner"></div>
            </button>
        </form>
    </div>

    <!-- Add hidden input for product sale price to be used by JavaScript -->
    <input type="hidden" id="product-sale-price" value="{{ $product->sale_price }}">

    {{-- Include the external JS files --}}
    @push('scripts')
    <script src="{{ url('public/front/assets/js/tiktok-select.js') }}"></script>
    <script src="{{ url('public/front/assets/js/main.js') }}"></script>
    <script>
        // Update total price input whenever upsells are added/removed
        document.addEventListener('DOMContentLoaded', function() {
            // Function to update the total price input based on the displayed total price
            function updateTotalPriceInput() {
                const totalPriceElement = document.getElementById('total-price');
                const totalPriceInput = document.getElementById('total-price-input');
                const amountInput = document.getElementById('amount-input');

                if (totalPriceElement && totalPriceInput) {
                    const priceText = totalPriceElement.textContent.replace(/[^\d.-]/g, '');
                    const totalPrice = parseFloat(priceText);

                    if (!isNaN(totalPrice)) {
                        totalPriceInput.value = totalPrice.toFixed(2);
                        if (amountInput) amountInput.value = totalPrice.toFixed(2);
                        console.log('Real-time update: total_price input set to', totalPrice.toFixed(2));
                    }
                }
            }

            // Monitor changes to the total price display
            const totalPriceObserver = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'characterData' || mutation.type === 'childList') {
                        updateTotalPriceInput();
                    }
                });
            });

            const totalPriceElement = document.getElementById('total-price');
            if (totalPriceElement) {
                totalPriceObserver.observe(totalPriceElement, {
                    characterData: true,
                    childList: true,
                    subtree: true
                });
            }

            // Also listen for clicks on upsell buttons to ensure updates
            document.addEventListener('click', function(e) {
                if (e.target.closest('.add-upsell-btn')) {
                    // Wait a small amount of time for the price to be updated in the DOM
                    setTimeout(updateTotalPriceInput, 50);
                }
            });

            // Form submission handler
            const paymentForm = document.getElementById('payment-form');
            if (paymentForm) {
                paymentForm.addEventListener('submit', function(e) {
                    // Stop the default submission
                    e.preventDefault();

                    // First validate video selection if applicable
                    if (window.selectedVideos && window.selectedVideos.length === 0 &&
                        paymentForm.getAttribute('data-service-type') !== 'followers') {
                        alert('Please select at least one video before placing your order.');
                        return false;
                    }

                    // Final update of price inputs before submission
                    updateTotalPriceInput();

                    // Show loading state
                    const submitButton = document.getElementById('submit-button');
                    const buttonText = document.getElementById('button-text');
                    const spinner = document.getElementById('spinner');

                    if (submitButton) submitButton.disabled = true;
                    if (buttonText) buttonText.textContent = 'Processing...';
                    if (spinner) spinner.classList.remove('d-none');

                    // Now manually submit the form
                    console.log('Submitting form with total price:', document.getElementById('total-price-input').value);
                    paymentForm.submit();
                }, true);
            }

            // Run once on page load to ensure initial values are set
            updateTotalPriceInput();
        });
    </script>
    @endpush
@endif
