<!DOCTYPE html>
<html lang="zxx">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title> Home - Box Print </title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ url('public/upload/fav.webp') }}" type="img/png" />
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
</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')


	<!--====== jquery js ======-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<!--====== Slick js ======-->
	{{-- <script src="{{ url('public/front/assets/js/slick.min.js') }}"></script> --}}
	<!--====== Main js ======-->
	<script src="{{ url('public/front/assets/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
