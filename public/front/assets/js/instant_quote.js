$('#quoteForm').on('submit', function(e) {
        e.preventDefault();

        $('#success-message').text('');
        $('#error-message').text('');
        $('#quoteForm').find('div[id^="error-"]').text('');

        var formData = $(this).serialize();

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
