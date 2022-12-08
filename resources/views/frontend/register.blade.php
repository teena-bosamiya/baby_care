@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Sign-up </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Sign-up</li>
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
                    @if(session()->has('message'))

                    <h6 class="text-danger"> {{ session()->get('message') }}</h6>
                    <hr>
                    @endif
                    <h6 class="title-subw3hny">Welcome to Baby Care World.</h6>
                    <h3 class="title-w3l mx-lg-5">Sign-up here</h3>
                    <p class="text-para mt-2">Baby Care Users Sign-up</p>
                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="{{ url('/') }}/register" enctype="multipart/form-data">
                            @csrf
                            <div class="form-top1">
                                <div class="form mt-5">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name" required="">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>Email Id</label>
                                    <input type="email" name="email" value="{{ old('email') }}"  placeholder="Enter Email" required="">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number" required="">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}" placeholder="Enter Password" required="">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>User Profile Photo(Optional)</label>
                                    <input type="file" name="image" placeholder="Image" value="{{ old('image') }}">
                                </div>

                                <div class="form mt-5">
                                    <label>Address Line 1</label>
                                    <input type="text" name="address1" value="{{ old('address1') }}" placeholder="Enter Address Line 1" required="">
                                    <span class="text-danger">
                                        @error('address1')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>Address Line 2</label>
                                    <input type="text" name="address2" value="{{ old('address2') }}" placeholder="Enter Address Line 2" required="">
                                    <span class="text-danger">
                                        @error('address2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>City</label>
                                    <input type="text" name="city" value="{{ old('city') }}" placeholder="Enter City" required="">
                                    <span class="text-danger">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>State</label>
                                    <input type="text" name="state" value="{{ old('state') }}" placeholder="Enter State" required="">
                                    <span class="text-danger">
                                        @error('state')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>Pin-Code</label>
                                    <input type="text" name="pincode" value="{{ old('pincode') }}" placeholder="Enter Pin-Code" required="">
                                    <span class="text-danger">
                                        @error('pincode')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form mt-5">
                                    <label>Security Question</label>
                                    <select name="question" value="{{ old('question') }}">
                                        <option value="What is your date of birth?">What is your date of birth?</option>
                                        <option value="What was your first car?">What was your first car?</option>
                                        <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                                        <option value="What is your favorite food?">What is your favorite food?</option>
                                        <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                                    </select>
                                </div>
                                <div class="form mt-5">
                                    <label>Answer</label>
                                    <input type="text" name="answer" value="{{ old('answer') }}" placeholder="Enter Answer" required="">
                                    <span class="text-danger">
                                        @error('answer')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-style btn-primary">Register With Us</button>
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
