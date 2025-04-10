<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ !empty($header_title) ? $header_title : ''}} - TikTok Fame</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ url('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/plugins/perfectscroll/perfect-scrollbar.css')}} " rel="stylesheet">
    <link href="{{ url('public/assets/plugins/pace/pace.css') }}" rel="stylesheet">

    <link href="{{ url('public/assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/front/assets/img/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/front/assets/img/favicon.png') }}" />


    @yield('style')
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        @include('backend.layouts.sidebar')

        @include('backend.layouts.header')

            <div class="app-content">
                @yield('content')
            </div>

        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ url('public/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('public/assets/js/main.min.js') }}"></script>
    <script src="{{ url('public/assets/js/custom.js') }}"></script>
    <script src="{{ url('public/assets/js/pages/dashboard.js')}}"></script>
    @yield('script')
</body>
</html>
