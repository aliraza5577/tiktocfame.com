// Initialize global arrays
window.selectedVideos = [];
window.selectedVideoUrls = [];

// Create global namespace if not already defined
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
document.addEventListener('DOMContentLoaded', function() {
    // Get total quantity from hidden input if available
    const totalQtyElement = document.getElementById('total-qty');
    if (totalQtyElement) {
        TikTokSelect.config.totalQty = parseInt(totalQtyElement.value) || 0;
    }

    // Delegate video card clicks
    document.addEventListener('click', function(e) {
        const card = e.target.closest('.video-card');
        if (card) {
            const videoId = card.dataset.videoId;
            const videoUrl = card.dataset.videoUrl;
            if (videoId) TikTokSelect.selectVideo(videoId, videoUrl, card);
        }
    });

    // Payment form handling
    const paymentForm = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit-button');
    const buttonText = document.getElementById('button-text');
    const spinner = document.getElementById('spinner');

    // Upsell functionality
    const totalPriceElement = document.getElementById('total-price');
    const amountInput = document.getElementById('amount-input');
    const upsellProductsInput = document.getElementById('upsell_products_input');
    const productSalePriceElement = document.getElementById('product-sale-price');
    const orderTotal = document.querySelector('.order-total');
    const orderTotalPrice = orderTotal ? orderTotal.querySelector('div:last-child') : null;

    // Find the base product price from the order summary
    let basePrice = 0;

    // First try to get the price from the first item in the order summary
    const baseProductElement = document.querySelector('.order-item:first-child');
    if (baseProductElement) {
        const priceElement = baseProductElement.querySelector('div:last-child');
        if (priceElement) {
            const priceText = priceElement.textContent.replace(/[^\d.-]/g, '');
            if (!isNaN(parseFloat(priceText))) {
                basePrice = parseFloat(priceText);
                console.log('Found base price from order item:', basePrice);
            }
        }
    }

    // If we couldn't find it in the order summary, try other sources
    if (basePrice === 0) {
        // Try to get from product sale price element
        if (productSalePriceElement && !isNaN(parseFloat(productSalePriceElement.value))) {
            basePrice = parseFloat(productSalePriceElement.value);
            console.log('Found base price from product sale price element:', basePrice);
        }
        // Try to get from amount input
        else if (amountInput && !isNaN(parseFloat(amountInput.value))) {
            basePrice = parseFloat(amountInput.value);
            console.log('Found base price from amount input:', basePrice);
        }
        // Try to get from total price element
        else if (totalPriceElement && totalPriceElement.textContent) {
            const priceText = totalPriceElement.textContent.replace(/[^\d.-]/g, '');
            if (!isNaN(parseFloat(priceText))) {
                basePrice = parseFloat(priceText);
                console.log('Found base price from total price element:', basePrice);
            }
        }
        // Try to get from order total price
        else if (orderTotalPrice && orderTotalPrice.textContent) {
            const priceText = orderTotalPrice.textContent.replace(/[^\d.-]/g, '');
            if (!isNaN(parseFloat(priceText))) {
                basePrice = parseFloat(priceText);
                console.log('Found base price from order total price:', basePrice);
            }
        }
        // Look for a specific product price element instead of any price element
        else {
            // Look for product price in specific locations
            const productPriceElement = document.querySelector('.product-price, .main-product-price, #product-price');
            if (productPriceElement) {
                const priceText = productPriceElement.textContent.replace(/[^\d.-]/g, '');
                if (!isNaN(parseFloat(priceText)) && parseFloat(priceText) > 0) {
                    basePrice = parseFloat(priceText);
                    console.log('Found base price from product price element:', basePrice);
                }
            }

            // If still not found, try to get the price from the first visible price on the page
            if (basePrice === 0) {
                // Get the first price that's visible in the order summary or product section
                const visiblePriceElement = document.querySelector('.order-summary .price, .product-section .price');
                if (visiblePriceElement) {
                    const priceText = visiblePriceElement.textContent.replace(/[^\d.-]/g, '');
                    if (!isNaN(parseFloat(priceText)) && parseFloat(priceText) > 0 && parseFloat(priceText) < 100) {
                        // Only accept reasonable prices (less than 100)
                        basePrice = parseFloat(priceText);
                        console.log('Found base price from visible price element:', basePrice);
                    }
                }
            }

            // If still not found, use a hardcoded default that makes sense for your product
            if (basePrice === 0) {
                basePrice = 3.00; // Default to a reasonable price for your product
                console.log('Using default base price:', basePrice);
            }
        }
    }

    console.log('Final base price detected:', basePrice);

    // Initialize tracking variables
    let upsellTotal = 0;
    let selectedUpsells = [];

    // Set initial total price display
    if (totalPriceElement) {
        totalPriceElement.textContent = '$' + basePrice.toFixed(2);
    }

    if (orderTotalPrice) {
        orderTotalPrice.textContent = '$' + basePrice.toFixed(2);
    }

    // Direct event binding for upsell buttons using event delegation
    document.addEventListener('click', function(e) {
        const button = e.target.closest('.add-upsell-btn');
        if (!button) return;

        e.preventDefault();
        e.stopPropagation();

        const id = button.getAttribute('data-id');
        const price = parseFloat(button.getAttribute('data-price'));
        const isAdded = button.getAttribute('data-added') === 'true';
        const upsellItem = document.getElementById('upsell-item-' + id);
        const upsellName = upsellItem.querySelector('.upsell-info div').textContent;
        const upsellIcon = upsellItem.querySelector('.upsell-info i').className.split(' ').pop();

        console.log('Button clicked:', id, price, isAdded);

        // Find or create the order summary container
        const orderSummary = document.querySelector('.order-summary');
        const orderTotal = document.querySelector('.order-total');
        const orderTotalPrice = orderTotal ? orderTotal.querySelector('div:last-child') : null;
        const upsellItemId = 'order-upsell-' + id;

        // Get the current base price directly from the total-price element
        // This ensures we always have the most up-to-date price
        let basePrice = 0;
        const totalPriceElement = document.getElementById('total-price');
        if (totalPriceElement) {
            const priceText = totalPriceElement.textContent.replace(/[^\d.-]/g, '');
            if (!isNaN(parseFloat(priceText))) {
                // If there are already upsells added, we need to subtract them to get the base price
                basePrice = parseFloat(priceText) - upsellTotal;
                console.log('Current base price from total-price:', basePrice);
            }
        }

        if (isAdded) {
            // Remove upsell
            button.setAttribute('data-added', 'false');
            button.textContent = '+';
            upsellItem.style.backgroundColor = '#023047'; // Reset background color

            // Update upsell total
            upsellTotal -= price;

            // Remove from selected upsells
            selectedUpsells = selectedUpsells.filter(item => item !== id);

            // Remove from order summary if exists
            const orderUpsellItem = document.getElementById(upsellItemId);
            if (orderUpsellItem && orderSummary) {
                orderSummary.removeChild(orderUpsellItem);
            }
        } else {
            // Add upsell
            button.setAttribute('data-added', 'true');
            button.textContent = '✓';
            upsellItem.style.backgroundColor = '#00c851'; // Change to green when selected

            // Update upsell total
            upsellTotal += price;

            // Add to selected upsells
            selectedUpsells.push(id);

            // Add to order summary if not already there
            if (orderSummary && !document.getElementById(upsellItemId) && orderTotal) {
                const newOrderItem = document.createElement('div');
                newOrderItem.className = 'order-item';
                newOrderItem.id = upsellItemId;
                newOrderItem.innerHTML = `
                    <div>
                        <i class="fas fa-${upsellIcon}"></i>
                        ${upsellName}
                    </div>
                    <div>$${price.toFixed(2)}</div>
                `;
                orderSummary.insertBefore(newOrderItem, orderTotal);
            }
        }

        // Calculate total price by adding base price and upsell total
        const totalPrice = basePrice + upsellTotal;

        // Format the price with 2 decimal places
        const formattedPrice = '$' + totalPrice.toFixed(2);

        // Update all price elements
        if (totalPriceElement) {
            console.log('Updating total price element to:', formattedPrice);
            totalPriceElement.textContent = formattedPrice;
        }

        if (orderTotalPrice) {
            console.log('Updating order total price to:', formattedPrice);
            orderTotalPrice.textContent = formattedPrice;
        }

        // Always update the hidden input fields with the current total price
        // Get a fresh reference to the amount input to ensure we're updating the actual DOM element
        const amountInputField = document.getElementById('amount-input');
        if (amountInputField) {
            amountInputField.value = totalPrice.toFixed(2);
            console.log('Updated amount input to:', totalPrice.toFixed(2), 'Element:', amountInputField);

            // Verify the update was successful
            setTimeout(() => {
                const verifiedValue = document.getElementById('amount-input').value;
                console.log('Verification - amount input value is now:', verifiedValue);
                if (verifiedValue !== totalPrice.toFixed(2)) {
                    // If verification fails, try a more direct approach
                    document.querySelector('input[name="amount"]').value = totalPrice.toFixed(2);
                    console.log('Forced update of amount input using querySelector');
                }
            }, 10);
        } else {
            console.warn('amount-input not found, trying to find by name');
            // Try to find by name attribute as a fallback
            const amountByName = document.querySelector('input[name="amount"]');
            if (amountByName) {
                amountByName.value = totalPrice.toFixed(2);
                console.log('Updated amount input by name to:', totalPrice.toFixed(2));
            } else {
                console.error('Could not find amount input field');
            }
        }

        // Update the product-sale-price input field - using direct DOM query to ensure we get the latest element
        const productSalePriceInput = document.getElementById('product-sale-price');
        if (productSalePriceInput) {
            // Force update with direct DOM manipulation
            productSalePriceInput.value = totalPrice.toFixed(2);
            console.log('Updated product-sale-price input to:', totalPrice.toFixed(2), 'Element:', productSalePriceInput);

            // Double-check the update was successful
            setTimeout(() => {
                console.log('Verification - product-sale-price value is now:', document.getElementById('product-sale-price').value);
            }, 10);
        } else {
            console.warn('product-sale-price input not found in the DOM');
        }

        // Update the total price input field if it exists
        const totalPriceInput = document.getElementById('total-price-input');
        if (totalPriceInput) {
            totalPriceInput.value = totalPrice.toFixed(2);
            console.log('Updated total price input to:', totalPrice.toFixed(2));
        } else {
            // If the total price input doesn't exist, create it
            const newTotalPriceInput = document.createElement('input');
            newTotalPriceInput.type = 'hidden';
            newTotalPriceInput.id = 'total-price-input';
            newTotalPriceInput.name = 'total_price';
            newTotalPriceInput.value = totalPrice.toFixed(2);

            // Add it to the payment form
            if (paymentForm) {
                paymentForm.appendChild(newTotalPriceInput);
                console.log('Created and added total price input with value:', totalPrice.toFixed(2));
            }
        }

        if (upsellProductsInput) {
            upsellProductsInput.value = JSON.stringify(selectedUpsells);
        }

        // Log the current state for debugging
        console.log('Current state:', {
            basePrice: basePrice,
            upsellTotal: upsellTotal,
            totalPrice: totalPrice,
            formattedPrice: formattedPrice,
            selectedUpsells: selectedUpsells,
            amountInputValue: amountInput ? amountInput.value : 'N/A',
            totalPriceInputValue: totalPriceInput ? totalPriceInput.value : 'N/A'
        });

        return false;
    });

    if (paymentForm) {
        paymentForm.addEventListener('submit', function(e) {
            // Temporarily prevent form submission to ensure our updates are applied
            e.preventDefault();

            // First validate video selection if applicable
            if (window.selectedVideos && window.selectedVideos.length === 0 &&
                paymentForm.getAttribute('data-service-type') !== 'followers') {
                alert('Please select at least one video before placing your order.');
                return false;
            }

            // Calculate the current total price (base price + upsells)
            const currentTotalPrice = basePrice + upsellTotal;

            // Ensure upsell products are included in the form submission
            if (selectedUpsells.length > 0) {
                // Make sure the upsell_products_input field exists and is updated
                let upsellInput = document.getElementById('upsell_products_input');

                // If it doesn't exist, create it
                if (!upsellInput) {
                    upsellInput = document.createElement('input');
                    upsellInput.type = 'hidden';
                    upsellInput.id = 'upsell_products_input';
                    upsellInput.name = 'upsell_products';
                    paymentForm.appendChild(upsellInput);
                }

                // Update the value with the selected upsells
                upsellInput.value = JSON.stringify(selectedUpsells);
            }

            // Update all price-related fields in the form

            // Update the amount input for Stripe
            let amountInput = document.getElementById('amount-input');
            if (amountInput) {
                amountInput.value = currentTotalPrice.toFixed(2);
                console.log('Setting amount for Stripe payment:', amountInput.value);
            }

            // Update the product-sale-price input - using direct DOM query
            const productSalePriceInput = document.getElementById('product-sale-price');
            if (productSalePriceInput) {
                productSalePriceInput.value = currentTotalPrice.toFixed(2);
                console.log('Setting product-sale-price for submission:', productSalePriceInput.value);
            } else {
                console.warn('product-sale-price input not found during form submission');

                // If it doesn't exist, create it and add to the form
                const newProductSalePriceInput = document.createElement('input');
                newProductSalePriceInput.type = 'hidden';
                newProductSalePriceInput.id = 'product-sale-price';
                newProductSalePriceInput.value = currentTotalPrice.toFixed(2);
                paymentForm.appendChild(newProductSalePriceInput);
                console.log('Created product-sale-price input with value:', currentTotalPrice.toFixed(2));
            }

            // Show loading state
            submitButton.disabled = true;
            buttonText.textContent = 'Processing...';
            spinner.classList.remove('d-none');

            // Now manually submit the form
            console.log('Final form submission with total price:', currentTotalPrice.toFixed(2));
            setTimeout(() => {
                paymentForm.submit();
            }, 50);

            return false;
        });
    }

    // Initialize selected info display if needed
    if (typeof TikTokSelect.updateSelectedInfo === 'function') {
        TikTokSelect.updateSelectedInfo();
    }
});
