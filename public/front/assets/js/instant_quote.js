// Custom Quote
$('#customQuote').on('submit', function(e) {
    e.preventDefault();
    $('.loadingWrap').show();

    $('#success-message').text('');
    $('#error-message').text('');
    $('#customQuote').find('div[id^="error-"]').text('');

    var formData = new FormData(this);

    var app_url = window.appUrl;

    $.ajax({
        url: app_url+'/custom_quote',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            $('.loadingWrap').hide();
            if(response.success) {
                $('#success-message').text(response.message);
                $('#customQuote')[0].reset();
                $("#filePreview").hide();
            } else {
                $('#error-message').text('Error submitting the form.');
            }
        },
        error: function(response) {
            $('.loadingWrap').hide();
            var errors = response.responseJSON.errors;
            if (errors) {
                $.each(errors, function(key, value) {
                    $('#error-' + key).text(value[0]);
                });
            }
        }
    });
});







// Popup Form
$('.popupInstantQuoteForm').on('submit', function(e) {
    e.preventDefault();
    $('.loadingWrap').show();

    $('#success-popup-message').text('');
    $('#error-popup-message').text('');
    $('.popupInstantQuoteForm').find('div[id^="error-popup-"]').text('');

    var formData = $(this).serialize();
    var app_url = window.appUrl;

    $.ajax({
        url: app_url+'/instent_quote',
        type: 'POST',
        data: formData,
        success: function(response) {
            $('.loadingWrap').hide();
            if(response.success) {
                $('#success-popup-message').text(response.message);  // Correct ID
                $('.popupInstantQuoteForm')[0].reset();
                $('.quoteModal .btn-close').click();  // Close modal only on success
            } else {
                $('#error-popup-message').text('Error submitting the form.');  // Display error
            }
        },
        error: function(response) {
            $('.loadingWrap').hide();
            var errors = response.responseJSON.errors;
            if (errors) {
                $.each(errors, function(key, value) {
                    $('#error-popup-' + key).text(value[0]);
                });
            }
        }
    });
});
















// Instant Quote
$('#quoteForm').on('submit', function(e) {
        e.preventDefault();

        $('#success-message').text('');
        $('#error-message').text('');
        $('#quoteForm').find('div[id^="error-"]').text('');

        var formData = $(this).serialize();
        // var submitUrl = 'http://citipackaging.com/';

        $.ajax({
            url: 'instent_quote',
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.success) {
                    $('#success-message').text(response.message);
                    $('#quoteForm')[0].reset();
                } else {
                    $('#error-message').text('Error submitting the form.');
                }
            },
            error: function(response) {
                var errors = response.responseJSON.errors;
                if (errors) {
                    $.each(errors, function(key, value) {
                        $('#error-' + key).text(value[0]);
                    });
                }
            }
        });
    });













