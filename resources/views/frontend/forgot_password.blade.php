@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Forgot Password</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Forgot Password</li>
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
                    <h3 class="title-w3l mx-lg-5">Forgot Password</h3>
                    <p class="text-para mt-2">Sorry !!!</p>

                            @else
                            <h6 class="title-subw3hny">Keep In Touch With Us.</h6>
                    <h3 class="title-w3l mx-lg-5">Forgot Password</h3>
                    <p class="text-para mt-2">We are Always with you</p>
                            @endif

                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="{{ url('/') }}/verify_user">
                            @csrf
                            <div class="form-top1">

                                <div class="form-top">

                                    <div class="form mt-5">
                                        <label>Email Id</label>
                                        <input type="email" name="email"  placeholder="Enter Email" required="">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form mt-5">
                                        <label>Security Question</label>
                                        <select name="question">
                                            <option value="What is your date of birth?">What is your date of birth?</option>
                                            <option value="What was your first car?">What was your first car?</option>
                                            <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                                            <option value="What is your favorite food?">What is your favorite food?</option>
                                            <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                                        </select>
                                    </div>
                                    <div class="form mt-5">
                                        <label>Answer</label>
                                        <input type="text" name="answer" placeholder="Enter Answer" required="">
                                        <span class="text-danger">
                                            @error('answer')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-style btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-form -->
@endsection
