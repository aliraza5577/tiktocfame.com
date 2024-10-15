<!DOCTYPE html>
<html lang="en-us">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ $meta_desc }}" data-rh="true">
    <meta name="keywords" content="{{ $meta_keyword }}">
    <meta name="author" content="CitiPackaging">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}" />
	<!--====== Title ======-->
	<title>{{ $meta_title }}</title>

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ url('public/front/assets/img/favicon.png') }}" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="{{ url('public/front/assets/css/animate.min.css') }}">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="{{ url('public/front/assets/css/bootstrap.min.css') }}" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="{{ url('public/front/assets/css/font-awesome.min.css') }}" />
	<!--====== Slick  css ======-->
	<link rel="stylesheet" href="{{ url('public/front/assets/css/slick.css') }}" />
	<!--====== Style css ======-->
	<link rel="stylesheet" href="{{ url('public/front/assets/css/style.css') }}" />


    <script type="application/ld+json">
        {{ $seo_schema }}
    </script>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')



    <script type="text/javascript">
        window.appUrl = "{{ url('/') }}";
    </script>


	<!--====== jquery js ======-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<!--====== Slick js ======-->
	{{-- <script src="{{ url('public/front/assets/js/slick.min.js') }}"></script> --}}
	<!--====== Main js ======-->
	<script src="{{ url('public/front/assets/js/main.js') }}"></script>
    <script src="{{ url('public/front/assets/js/instant_quote.js') }}"></script>


    <script>
        // popup Custom Quote
$('#popup_customQuote').on('submit', function(e) {
    e.preventDefault();
    $('.loadingWrap').show();

    $('#popup-success-message').text('');
    $('#popup-error-message').text('');
    $('#popup_customQuote').find('div[id^="error-"]').text('');

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
                $('#popup-success-message').text(response.message);
                $('#popup_customQuote')[0].reset();
                $("#popfilePreview").hide();
            } else {
                $('#popup-error-message').text('Error submitting the form.');
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
    </script>



    @yield('script')
</body>

</html>


