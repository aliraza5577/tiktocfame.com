@extends('layouts.app')

@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
    body {
        background: linear-gradient(32deg, #005f73 0%, #0a9396 79%);
        color: #fff;
    }
    .checkout-container {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    input.form-control {
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        border: none;
    }
    input::placeholder {
        color: #fff !important;
    }
    h2, h3{
        color: #fff
    }
    .btn-custom {
        background: #005f73;
        border: none;
        color: #fff;
        transition: 0.3s;
    }
    .btn-custom:hover {
        background: #0a9396;
        color: #fff;
    }
    .userInfoWrap > div > div {
        padding: 20px;
    }
    .spinner {
        display: none;
        width: 20px;
        height: 20px;
        margin-left: 8px;
        border: 3px solid #fff;
        border-radius: 50%;
        border-top: 3px solid transparent;
        animation: spin 1s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .btn-custom:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
    /* Toast notification styles */
    .toast-notification {
        position: fixed;
        top: 20px;
        right: 20px;
        max-width: 350px;
        background: white;
        color: #333;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        z-index: 9999;
        transform: translateY(-20px);
        opacity: 0;
        transition: all 0.3s ease;
    }
    .toast-notification.show {
        transform: translateY(0);
        opacity: 1;
    }
    .toast-icon {
        margin-right: 15px;
        font-size: 20px;
    }
    .toast-content {
        flex: 1;
    }
    .toast-close {
        background: transparent;
        border: none;
        font-size: 20px;
        cursor: pointer;
        margin-left: 10px;
        color: #999;
    }
    .toast-notification.error {
        border-left: 4px solid #ff4d4f;
    }
    .toast-notification.error .toast-icon {
        color: #ff4d4f;
    }
    .toast-notification.warning {
        border-left: 4px solid #faad14;
    }
    .toast-notification.warning .toast-icon {
        color: #faad14;
    }
    .toast-notification.success {
        border-left: 4px solid #52c41a;
    }
    .toast-notification.success .toast-icon {
        color: #52c41a;
    }
    .toast-notification.info {
        border-left: 4px solid #1890ff;
    }
    .toast-notification.info .toast-icon {
        color: #1890ff;
    }

    /* Product selection dropdown styling */
    .product-select-wrapper {
        position: relative;
    }
    .product-select-wrapper select {
        padding-left: 40px;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        border: none;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
    }
    .product-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #ff4d4f;
        font-size: 18px;
        z-index: 10;
    }

    /* Custom select styling for price on right */
    span.selection{
        width: 100%;
    }

    .select2-container--default .select2-selection--single {
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        border: none !important;
        height: 45px !important;
        padding: 8px 12px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 9px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #fff;
        display: flex;
        justify-content: space-between;
        line-height: 28px;
    }
    #select2-product-selection-container{
        position: relative;
        padding-right: 60px; /* Make room for price */
    }
    .product-name {
        flex-grow: 1;
        padding-left: 20px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .product-price {
        font-weight: bold;
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
    }
    .select2-dropdown {
        background-color: rgba(10, 147, 150, 0.9);
        border: none;
    }
    .select2-container--default .select2-results__option {
        display: flex;
        justify-content: space-between;
        padding: 8px 12px;
        color: #333;
        position: relative;
    }
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: rgba(0, 95, 115, 0.8);
    }
</style>

    <script>
        // Add this script after your existing scripts
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Select2
            $('#product-selection').select2({
                minimumResultsForSearch: Infinity,
                templateResult: formatProduct,
                templateSelection: formatProduct,
                dropdownParent: $('.product-select-wrapper') // Attach dropdown to parent for better positioning
            });

            // Update icon when selection changes
            $('#product-selection').on('change', function() {
                const selectedOption = $(this).find('option:selected');
                const iconClass = selectedOption.data('icon');
                $('.product-icon').attr('class', iconClass + ' product-icon');

                // Call the existing update function
                updateProductSelection(this.value);
            });

            // Format the product options with price on right
            function formatProduct(product) {
                if (!product.id) {
                    return product.text;
                }

                const $product = $(
                    '<span class="product-name">' + product.text + '</span>' +
                    '<span class="product-price">$' + $(product.element).data('price') + '</span>'
                );

                return $product;
            }
        });
    </script>
</style>
<script>
    function updateProductSelection(productId) {
        // Fetch product details via AJAX without showing loading indicator
        fetch('{{ url("/get-product-details") }}/' + productId, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Update product details on the page
            $('h3:first').text(data.name + ' - $' + data.sale_price);
            $('input[name="product_id"]').val(data.id);

            // Update icon based on service type
            let iconClass = 'fas fa-heart';
            if (data.service_type === 'followers') {
                iconClass = 'fas fa-user';
            } else if (data.service_type === 'views') {
                iconClass = 'fas fa-eye';
            }
            $('.product-icon').attr('class', iconClass + ' product-icon');
        })
        .catch(error => {
            console.error('Error:', error);
            showToast('Failed to load product details. Please try again.', 'error');
        });
    }

    $(document).ready(function() {
        // Initialize Select2
        $('#product-selection').select2({
            minimumResultsForSearch: Infinity,
            templateResult: formatProduct,
            templateSelection: formatProduct
        });

        // Format the product options with price on right
        function formatProduct(product) {
            if (!product.id) {
                return product.text;
            }

            const $product = $(
                '<span class="product-name">' + product.text + '</span>' +
                '<span class="product-price">$' + $(product.element).data('price') + '</span>'
            );

            return $product;
        }

        // Update icon when selection changes
        $('#product-selection').on('change', function() {
            const selectedOption = $(this).find('option:selected');
            const iconClass = selectedOption.data('icon');
            $('.product-icon').attr('class', iconClass + ' product-icon');

            // Call the updated function
            updateProductSelection(this.value);
        });
    });
</script>
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8 checkout-container">
            <h2 class="text-center mb-4">Get Started</h2>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form id="checkoutForm">
                @csrf
                <div class="text-center">
                <h3>{{ $product->name }} - ${{ $product->sale_price }}</h3>
                <p><strong></strong></p>
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                </div>
                <br>
                <div class="mb-3">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username *" required>
                </div>
                <div class="mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email *" required>
                </div>

                <div class="mb-3 product-select-wrapper">
                    @php
                        $iconClass = 'fas fa-heart'; // Default icon
                        if($product->service_type == 'followers') {
                            $iconClass = 'fas fa-user';
                        } elseif($product->service_type == 'views') {
                            $iconClass = 'fas fa-eye';
                        }
                    @endphp
                    <i class="{{ $iconClass }} product-icon"></i>
                    <select class="form-control" id="product-selection" name="product_selection" onchange="updateProductSelection(this.value)">
                        @foreach($similarProducts as $similarProduct)
                            @php
                                // Determine icon class for each product
                                $productIconClass = 'fas fa-heart'; // Default icon
                                if($similarProduct->service_type == 'followers') {
                                    $productIconClass = 'fas fa-user';
                                } elseif($similarProduct->service_type == 'views') {
                                    $productIconClass = 'fas fa-eye';
                                }
                            @endphp
                            <option value="{{ $similarProduct->id }}"
                                    {{ $similarProduct->id == $product->id ? 'selected' : '' }}
                                    data-icon="{{ $productIconClass }}"
                                    data-price="{{ $similarProduct->sale_price }}">
                                {{ $similarProduct->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- <div class="mb-3">
                    <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                </div> --}}
                <button type="button" id="nextBtn" class="btn btn-custom w-100 py-2">
                    <span>Next</span>
                    <div class="spinner"></div>
                </button>

                    <script>
                        document.getElementById('nextBtn').addEventListener('click', async function(event) {
                            event.preventDefault();
                            const button = this;
                            const spinner = button.querySelector('.spinner');
                            const buttonText = button.querySelector('span');

                            let username = document.getElementById('username').value.trim();
                            let email = document.getElementById('email').value.trim();

                            // Only validate email, not username
                            if (username === '') {
                                showToast('Please enter your TikTok username.', 'error');
                                return;
                            }

                            if (!validateEmail(email)) {
                                showToast('Please enter a valid email address.', 'error');
                                return;
                            }

                            // Store email in session
                            await fetch('{{ route("store.checkout.email") }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    email: email
                                })
                            });

                            // Store product data in session before AJAX call
                            await fetch('{{ route("store.product.session") }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    product_id: document.querySelector('input[name="product_id"]').value
                                })
                            });

                            // Show loading state
                            button.disabled = true;
                            spinner.style.display = 'inline-block';

                            try {
                                let response = await fetch(`{{ url('/social-media/tiktok-blade') }}/${encodeURIComponent(username)}`, {
                                    method: 'GET',
                                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                                });
                                if (!response.ok) {
                                    showToast('User not found. Please try another username.', 'error');
                                    return;
                                }
                                
                                // Only update the form content, not the entire container
                                const formContent = await response.text();
                                document.getElementById('checkoutForm').innerHTML = formContent;
                            } catch (error) {
                                console.error('Error:', error);
                                showToast('Something went wrong. Please try again.', 'error');
                            } finally {
                                // Hide loading state
                                button.disabled = false;
                                spinner.style.display = 'none';
                            }
                        });

                        function validateEmail(email) {
                            let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            return re.test(email);
                        }

                        // Toast notification system
                        function showToast(message, type = 'info') {
                            // Remove existing toasts
                            const existingToasts = document.querySelectorAll('.toast-notification');
                            existingToasts.forEach(toast => toast.remove());

                            // Create toast element
                            const toast = document.createElement('div');
                            toast.className = 'toast-notification ' + type;

                            // Create icon
                            const icon = document.createElement('div');
                            icon.className = 'toast-icon';

                            // Set icon based on type
                            if (type === 'error') {
                                icon.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
                            } else if (type === 'warning') {
                                icon.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
                            } else if (type === 'success') {
                                icon.innerHTML = '<i class="fas fa-check-circle"></i>';
                            } else {
                                icon.innerHTML = '<i class="fas fa-info-circle"></i>';
                            }

                            // Create content
                            const content = document.createElement('div');
                            content.className = 'toast-content';
                            content.textContent = message;

                            // Create close button
                            const closeBtn = document.createElement('button');
                            closeBtn.className = 'toast-close';
                            closeBtn.innerHTML = '&times;';

                            // Assemble toast
                            toast.appendChild(icon);
                            toast.appendChild(content);
                            toast.appendChild(closeBtn);

                            // Add to body
                            document.body.appendChild(toast);

                            // Show with animation
                            setTimeout(() => {
                                toast.classList.add('show');
                            }, 10);

                            // Auto hide after 5 seconds
                            const hideTimeout = setTimeout(() => {
                                hideToast(toast);
                            }, 5000);

                            // Close button functionality
                            closeBtn.addEventListener('click', function() {
                                clearTimeout(hideTimeout);
                                hideToast(toast);
                            });
                        }

                        function hideToast(toast) {
                            toast.classList.remove('show');
                            setTimeout(() => {
                                toast.remove();
                            }, 300);
                        }
                    </script>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
