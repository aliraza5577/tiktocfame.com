$(document).ready(function() {
    // Handle payment form submission
    $('#payment-form').on('submit', function(e) {
        // Prevent default form submission
        e.preventDefault();
        
        console.log('Form submission intercepted');
        
        // Show loading state
        $('#submit-button').prop('disabled', true);
        $('#button-text').text('Processing...');
        $('#spinner').removeClass('d-none');
        
        // Get form data
        const formData = $(this).serialize();
        const formAction = $(this).attr('action');
        
        console.log('Submitting to:', formAction);
        console.log('Form data:', formData);
        
        // Send AJAX POST request
        $.ajax({
            url: formAction,
            type: 'POST',
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
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
});