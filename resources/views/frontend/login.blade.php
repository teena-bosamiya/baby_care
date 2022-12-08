@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                           User Login</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Sign-In</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!-- contact-form -->
    <section class="w3l-contact-main" id="contact">
        <div class="contact-infhny py-5">
            <div class="container py-md-5">
                <div class="title-content text-center mb-md-5 mb-4">
                    @if(session()->has('message1'))

                    <h6 class="title-subw3hny danger"> {{ session()->get('message1') }}</h6><hr>
                    <h3 class="title-w3l mx-lg-5">Login</h3>
                    <p class="text-para mt-2">We are wecoming you</p>

                            @else
                            <h6 class="title-subw3hny">Keep In Touch With Us.</h6>
                    <h3 class="title-w3l mx-lg-5">Login</h3>
                    <p class="text-para mt-2">We are welcoming you</p>
                            @endif
                            @if(session()->has('success_message'))

                    <h6 class="text-danger"> {{ session()->get('success_message') }}</h6>
                    <hr>
                    @endif

                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="{{ url('/') }}/login" method="post">
                            @csrf
                            <div class="form-top1">

                                <div class="form-top">

                                    <div class="form">
                                        <input type="email" name="email" value="{{ old('email') }}"  placeholder="Enter Email" required="">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form"><br>
                                        <input type="password" name="password" value="{{ old('password') }}" placeholder="Enter Password" required="">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-style btn-primary">Login</button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center mt-5">
                            <h3 style="margin: -20px 0 20px 0; color:rgb(255, 123, 0)">OR</h3>
                                <a href="{{ url('/forgot_password') }}" class="btn btn-style btn-primary">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-form -->

    <!--/contact-->
    <section class="w3l-contact-main w3l-contact-info py-5" style="margin-top: -120px;" id="contact">
        <div class="midd-w3 py-md-5">
            <div class="container">
                <div class="row contact-infos pt-lg-4">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-map-marked-alt"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Location</h3>
                                <p>Matva Sheri , </p>
                                <p> jetpur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-blender-phone"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Phone Numbers</h3>
                                <p><a href="tel:+12 403-11-22-69">+12 403-11-22-69</a></p>
                                <p><a href="tel:+12 304-11-22-79">+12 304-11-22-79</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-envelope-open-text"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Emails</h3>
                                <p> <a href="mailto:company@gmail.com">company@gmail.com</a></p>
                                <p> <a href="mailto:support@gmail.com">support@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//contact-->
@endsection
