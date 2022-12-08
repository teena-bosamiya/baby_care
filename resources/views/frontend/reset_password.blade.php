@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                           Reset Your Password</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Reset Password</li>
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
                    @if(session()->has('message2'))

                    <h6 class="title-subw3hny danger"> {{ session()->get('message2') }}</h6><hr>
                    <h3 class="title-w3l mx-lg-5">Enter New Password</h3>
                    <p class="text-para mt-2">We are Always with you</p>

                            @else
                            <h6 class="title-subw3hny">Keep In Touch With Us.</h6>
                            <h3 class="title-w3l mx-lg-5">Enter New Password</h3>
                            <p class="text-para mt-2">We are Always with you</p>
                            @endif



                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="{{ url('/') }}/update_password">
                            @csrf
                            <div class="form-top1">
                                @foreach ($user1 as $data )
                                <input name="user_email" value="{{ $user1->user_email }}" type="hidden"/>
                                @endforeach
                                <div class="form-top">
                                    <div class="form mt-5">
                                        <label>Password</label>
                                        <input type="Password" name="password"  placeholder="Enter Password" required="">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form mt-5">
                                        <label>Confirm Password</label>
                                        <input type="Password" name="confirmpassword"  placeholder="Enter Password Again" required="">
                                        <span class="text-danger">
                                            @error('confirmpassword')
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
