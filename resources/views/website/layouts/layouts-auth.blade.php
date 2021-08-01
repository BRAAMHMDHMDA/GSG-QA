<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('website_assets/images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('website_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website_assets/css/style.css') }}">
    <!-- end inject -->

</head>
<body>

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-area bg-white shadow-sm" style="padding: 15px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo-box">
                    <a href="index.html" class="logo"><img src="{{ asset('website_assets/images/logo-black.png') }}" alt="logo"></a>
                    <div class="user-action">
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper">
                    <nav class="menu-bar ml-auto pr-2"></nav><!-- end main-menu -->
                    <div class="nav-right-button">
                        <a href="{{ route('login') }}" class="btn theme-btn theme-btn-outline mr-2"><i class="la la-sign-in mr-1"></i> Login</a>
                        <a href="{{ route('register') }}" class="btn theme-btn"><i class="la la-user mr-1"></i> Sign up</a>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="body-overlay"></div>
</header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START SIGN UP AREA
======================================-->
@yield('content')
<!--======================================
        END SIGN UP AREA
======================================-->

<!-- template js files -->
<script src="{{asset('website_assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('website_assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website_assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/signup.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:47 GMT -->
</html>
