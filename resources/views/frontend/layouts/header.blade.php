   <!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Baby Care</title>
    <!-- google fonts -->
    <link rel="icon" type="image/x-icon" href="{{ URL('frontend/images/babytitle.png') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style-starter.css') }}">

</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke">
                <h1><a class="navbar-brand" href="{{ url('/') }}">
                        Baby<span class="sub-color">Care</span>
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/product') }}">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cart') }}">Cart</a>
                        </li>
                        @if (session()->has('user_id'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/user_cart') }}">View Your Older</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/user_logout') }}">Logout</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/user_login') }}">Sign-IN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/user_register') }}">Sign-UP</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>

                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <section class="banner-19">
        <div class="banner-layer">
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <div class="w3lbanner-left">
                            <!-- if logo is image enable this
                        <a class="logo" href="index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                            <h6>Mother Nature never lies.</h6>
                            <h4>Welcome to Baby Care </h4>

                            <a href="{{ url('/contact') }}" class="btn btn-style btn-secondary mt-md-5 mt-4">Contact Us</a>
                        </div>
                        <div class="w3lbanner-right">
                            <p>Babies are God's Gift.Their first breath took ours away.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Banner-End-->
