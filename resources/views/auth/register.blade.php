
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
    <title>Sign Up</title>

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
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="#">Blog</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="{{url('login')}}">Sign In</a></p>
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="auth-credentials m-b-xxl">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" value="{{ old('name') }}" class="form-control m-b-md" id="name" aria-describedby="name" placeholder="Enter Name">
                    <p style="color:red;">{{ $errors->first('name') }}</p>

                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" value="{{ old('email') }}"  class="form-control m-b-md" id="email" aria-describedby="email" placeholder="example@neptune.com">
                    <p style="color:red;">{{ $errors->first('email') }}</p>

                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>
                    <p style="color:red;">{{ $errors->first('password') }}</p>
                </div>

                <div class="auth-submit">
                    <input type="submit" value="Sign Up">
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