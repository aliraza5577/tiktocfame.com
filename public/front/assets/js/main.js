// Initialize global arrays and namespace
window.selectedVideos = [];
window.selectedVideoUrls = [];
window.TikTokSelect = window.TikTokSelect || {};

// Configuration setup
TikTokSelect.config = {
    maxSelections: 5,
    totalQty: 0
};

// Ensure script initializes only once
if (!TikTokSelect.initialized) {
    TikTokSelect.initialized = true;

    /**
     * Handles video selection/deselection logic
     */
    TikTokSelect.selectVideo = function(videoId, videoUrl, cardElement) {
        const isSelected = $(cardElement).hasClass('selected');
        const index = window.selectedVideos.indexOf(videoId);

        if (isSelected) {
            // Deselect video
            $(cardElement).removeClass('selected');
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
            $(cardElement).addClass('selected');
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
        
        $('#selected-count').text(count);
        $('#selected_videos_input').val(window.selectedVideos.join(','));
        $('#selected_video_urls').val(JSON.stringify(window.selectedVideoUrls));

        // Update per-post distribution if applicable
        if (TikTokSelect.config.totalQty > 0) {
            const perPost = count > 0 ? Math.floor(TikTokSelect.config.totalQty / count) : 0;
            $('#per-post-count').text(perPost);
        }
    };
}

// Function to validate video selection
function validateVideoSelection() {
    if (window.selectedVideos && window.selectedVideos.length === 0) {
        alert('Please select at least one video before placing your order.');
        return false;
    }
    return true;
}

// Document ready function
$(document).ready(function() {
    // Set total quantity if available
    if (typeof product !== 'undefined' && product.qty) {
        TikTokSelect.config.totalQty = product.qty;
    } else {
        const totalQty = parseInt($('#total-qty').val()) || 0;
        TikTokSelect.config.totalQty = totalQty;
    }

    // Delegate video card clicks
    $(document).on('click', '.video-card', function() {
        const videoId = $(this).data('video-id');
        const videoUrl = $(this).data('video-url');
        
        // Skip if video ID is missing
        if (!videoId) {
            console.warn('Video ID is missing, cannot select this video');
            return;
        }
        
        TikTokSelect.selectVideo(videoId, videoUrl, this);
    });

    // Initialize selected info display
    TikTokSelect.updateSelectedInfo();

    // Payment form handling
    const $submitButton = $('#submit-button');
    const $buttonText = $('#button-text');
    const $spinner = $('#spinner');
    const $paymentForm = $('#payment-form');

    // Upsell functionality
    const $totalPriceElement = $('#total-price');
    const $orderTotalPrice = $('.order-total div:last-child');

    // Find the base product price from the order summary
    let basePrice = 0;

    // First try to get the price from the first item in the order summary
    const $baseProductElement = $('.order-item:first-child');
    if ($baseProductElement.length) {
        const priceText = $baseProductElement.find('div:last-child').text().replace(/[^\d.-]/g, '');
        if (!isNaN(parseFloat(priceText))) {
            basePrice = parseFloat(priceText);
            console.log('Found base price from order item:', basePrice);
        }
    }

    // If we couldn't find it in the order summary, try other sources
    if (basePrice === 0) {
        // Try to get from product sale price element
        const $productSalePriceElement = $('#product-sale-price');
        if ($productSalePriceElement.length && !isNaN(parseFloat($productSalePriceElement.val()))) {
            basePrice = parseFloat($productSalePriceElement.val());
            console.log('Found base price from product sale price element:', basePrice);
        }
        // Try to get from amount input
        else if ($('#amount-input').length && !isNaN(parseFloat($('#amount-input').val()))) {
            basePrice = parseFloat($('#amount-input').val());
            console.log('Found base price from amount input:', basePrice);
        }
        // Try to get from total price element
        else if ($totalPriceElement.length) {
            const priceText = $totalPriceElement.text().replace(/[^\d.-]/g, '');
            if (!isNaN(parseFloat(priceText))) {
                basePrice = parseFloat(priceText);
                console.log('Found base price from total price element:', basePrice);
            }
        }
        // Try to get from order total price
        else if ($orderTotalPrice.length) {
            const priceText = $orderTotalPrice.text().replace(/[^\d.-]/g, '');
            if (!isNaN(parseFloat(priceText))) {
                basePrice = parseFloat(priceText);
                console.log('Found base price from order total price:', basePrice);
            }
        }
        // Look for a specific product price element
        else {
            const $productPriceElement = $('.product-price, .main-product-price, #product-price');
            if ($productPriceElement.length) {
                const priceText = $productPriceElement.text().replace(/[^\d.-]/g, '');
                if (!isNaN(parseFloat(priceText)) && parseFloat(priceText) > 0) {
                    basePrice = parseFloat(priceText);
                    console.log('Found base price from product price element:', basePrice);
                }
            }

            // If still not found, use a default value
            if (basePrice === 0) {
                basePrice = 3.00; // Default price
                console.log('Using default base price:', basePrice);
            }
        }
    }

    console.log('Final base price detected:', basePrice);

    // Initialize tracking variables
    let upsellTotal = 0;
    let selectedUpsells = [];

    // Set initial total price display
    if ($totalPriceElement.length) {
        $totalPriceElement.text('$' + basePrice.toFixed(2));
    }

    if ($orderTotalPrice.length) {
        $orderTotalPrice.text('$' + basePrice.toFixed(2));
    }

    // Handle upsell button clicks
    $(document).on('click', '.add-upsell-btn', function(e) {
        e.preventDefault();
        e.stopPropagation();

        const $button = $(this);
        const id = $button.data('id');
        const price = parseFloat($button.data('price'));
        const isAdded = $button.data('added') === true;
        const $upsellItem = $('#upsell-item-' + id);
        const upsellName = $upsellItem.find('.upsell-info div').text();
        const upsellIcon = $upsellItem.find('.upsell-info i').attr('class').split(' ').pop();

        console.log('Button clicked:', id, price, isAdded);

        // Find or create the order summary container
        const $orderSummary = $('.order-summary');
        const $orderTotal = $('.order-total');
        const upsellItemId = 'order-upsell-' + id;

        if (isAdded) {
            // Remove upsell
            $button.data('added', false);
            $button.text('+');
            $upsellItem.css('backgroundColor', '#023047');

            // Update upsell total
            upsellTotal -= price;

            // Remove from selected upsells
            selectedUpsells = selectedUpsells.filter(item => item !== id);

            // Remove from order summary if exists
            $('#' + upsellItemId).remove();
        } else {
            // Add upsell
            $button.data('added', true);
            $button.text('✓');
            $upsellItem.css('backgroundColor', '#00c851');

            // Update upsell total
            upsellTotal += price;

            // Add to selected upsells
            selectedUpsells.push(id);

            // Add to order summary if not already there
            if ($orderSummary.length && !$('#' + upsellItemId).length && $orderTotal.length) {
                const newOrderItem = `
                    <div class="order-item" id="${upsellItemId}">
                        <div>
                            <i class="fas fa-${upsellIcon}"></i>
                            ${upsellName}
                        </div>
                        <div>$${price.toFixed(2)}</div>
                    </div>
                `;
                $(newOrderItem).insertBefore($orderTotal);
            }
        }

        // Calculate total price
        const totalPrice = basePrice + upsellTotal;
        const formattedPrice = '$' + totalPrice.toFixed(2);

        // Update all price elements
        if ($totalPriceElement.length) {
            $totalPriceElement.text(formattedPrice);
        }

        if ($orderTotalPrice.length) {
            $orderTotalPrice.text(formattedPrice);
        }

        // Update hidden input fields
        $('#amount-input, input[name="amount"]').val(totalPrice.toFixed(2));
        $('#product-sale-price').val(totalPrice.toFixed(2));
        
        // Update or create total price input
        if ($('#total-price-input').length) {
            $('#total-price-input').val(totalPrice.toFixed(2));
        } else if ($paymentForm.length) {
            $('<input>').attr({
                type: 'hidden',
                id: 'total-price-input',
                name: 'total_price',
                value: totalPrice.toFixed(2)
            }).appendTo($paymentForm);
        }

        // Update upsell products input
        if ($('#upsell_products_input').length) {
            $('#upsell_products_input').val(JSON.stringify(selectedUpsells));
        } else if ($paymentForm.length) {
            $('<input>').attr({
                type: 'hidden',
                id: 'upsell_products_input',
                name: 'upsell_products',
                value: JSON.stringify(selectedUpsells)
            }).appendTo($paymentForm);
        }

        console.log('Current state:', {
            basePrice: basePrice,
            upsellTotal: upsellTotal,
            totalPrice: totalPrice,
            formattedPrice: formattedPrice,
            selectedUpsells: selectedUpsells
        });

        return false;
    });

        // Replace the form submission handler with a direct button click handler
        if ($paymentForm.length) {
            console.log('Payment form found, attaching click handler to submit button');
            
            // Attach click handler directly to the submit button
            $('#submit-button').click(function(e) {
                // Prevent any default behavior
                e.preventDefault();
                e.stopPropagation();
                
                // Show alert to confirm button click
                alert('Submit button clicked!');
                console.log('Submit button clicked');
                
                // First validate video selection if applicable
                if (window.selectedVideos && window.selectedVideos.length === 0 &&
                    $paymentForm.data('service-type') !== 'followers') {
                    alert('Please select at least one video before placing your order.');
                    return false;
                }
                
                // Show loading state
                $(this).prop('disabled', true);
                $('#button-text').text('Processing...');
                $('#spinner').removeClass('d-none');
                
                // Get form data
                const formData = $paymentForm.serialize();
                
                // Hardcode the action URL
                const formAction = window.appUrl + '/stripe/payment';
                
                console.log('Submitting to:', formAction);
                console.log('Form data:', formData);
                
                // Use jQuery AJAX for simplicity
                $.ajax({
                    url: formAction,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log('Payment form submission successful:', response);
                        
                        // Redirect to Stripe checkout
                        if (response.redirect_url) {
                            window.location.href = response.redirect_url;
                        } else if (response.checkout_url) {
                            window.location.href = response.checkout_url;
                        } else if (response.redirect) {
                            window.location.href = response.redirect;
                        } else {
                            console.error('No redirect URL found in response');
                            $('#submit-button').prop('disabled', false);
                            $('#button-text').text('Place Order');
                            $('#spinner').addClass('d-none');
                            alert('There was a problem processing your payment. Please try again.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Payment form submission error:', status, error);
                        console.log('Response:', xhr.responseText);
                        
                        // Try to extract Stripe URL from response
                        if (xhr.responseText && xhr.responseText.includes('stripe.com')) {
                            const match = xhr.responseText.match(/https:\/\/checkout\.stripe\.com[^"'\s]+/);
                            if (match && match[0]) {
                                console.log('Found Stripe URL in response:', match[0]);
                                window.location.href = match[0];
                                return;
                            }
                        }
                        
                        // Reset form state
                        $('#submit-button').prop('disabled', false);
                        $('#button-text').text('Place Order');
                        $('#spinner').addClass('d-none');
                        alert('There was a problem processing your payment. Please try again.');
                    }
                });
                
                return false;
            });
        }


});
