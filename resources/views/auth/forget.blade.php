
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    
    <!-- Title -->
    <title>Forget Password</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ url('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/plugins/pace/pace.css') }}" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="{{ url('public/assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/assets/images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/assets/images/neptune.png') }}" />
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="logo">
                    <a href="#">Blog</a>
                </div>
                <p class="auth-description">Enter your Email for recover your account.<br>Don't have an account? <a href="{{url('register')}}">Sign Up</a></p>
                @if(!empty(session('error')))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if(!empty(session('success')))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="auth-credentials m-b-xxl">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control m-b-md" id="email" aria-describedby="email" placeholder="example@neptune.com">
                </div>

                <div class="auth-submit">
                    <input type="submit" value="Forgot Password">
                    <a href="{{url('login')}}" class="auth-forgot-password float-end">Sign In</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="{{ url('public/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('public/assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('public/assets/js/main.min.js') }}"></script>
    <script src="{{ url('public/assets/js/custom.js') }}"></script>
</body>
</html>