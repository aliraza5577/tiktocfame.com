<!DOCTYPE html>
<html lang="en-us">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ $meta_desc }}" data-rh="true">
    <meta name="keywords" content="{{ $meta_keyword }}">
    <meta name="author" content="TikTok Fame">
    {{-- <meta name="robots" content="noindex, nofollow"> --}}
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ url('public/front/assets/css/style.css') }}" />



    <script type="application/ld+json">
        {{ $seo_schema }}
    </script>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script type="text/javascript">
        window.appUrl = "{{ url('/') }}";
    </script>

    <!--====== jquery js ======-->
    <script src="{{ url('public/front/assets/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--====== Main js ======-->
    <script src="{{ url('public/front/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- @stack('scripts') --}}
    @yield('script')
</body>
</html>


