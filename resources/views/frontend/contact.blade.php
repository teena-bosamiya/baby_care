@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Contact Us </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
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
                    <h6 class="title-subw3hny">
                            {{ session()->get('message') }}
                    </h6>
                    @else
                    <h6 class="title-subw3hny">Send us a message</h6>
                    <h3 class="title-w3l mx-lg-5">Keep In Touch With Us.</h3>
                    <p class="text-para mt-2">Contact us to more thing. feel free to ask question.</p>
                            @endif

                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="{{ url('/') }}/insert_contact_info">
                            @csrf

                            <div class="form-top1">

                                <div class="form-top">
                                    <div class="form-top-right" style="margin-bottom: 20pt;">
                                        <input type="text" class="form-group" name="name" id="Name" value="{{ old('name') }}" placeholder="Name" required="">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-top-right" style="margin-bottom: 20pt;">
                                        <input type="email" name="email" value="{{ old('email') }}" id="Sender" placeholder="Email*" required="">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-top-right" style="margin-bottom: 20pt;">
                                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Your Subject" required="">
                                        <span class="text-danger">
                                            @error('subject')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-top-righ">
                                        <label class="title-subw3hny">Massege</label>
                                        <textarea name="messege" id="Message" placeholder="Message*" required="">{{ old('messege') }} </textarea>
                                        <span class="text-danger">
                                            @error('messege')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-style btn-primary">Submit Now <i class="far fa-paper-plane ml-lg-3"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-form -->
    <!-- contact map -->
    <section class="w3l-contact-main" id="contact">
        <div class="container">
            <div class="map pt-lg-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59290.421937101324!2d70.6237002!3d21.7550374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39581769acf7b84f%3A0xd14f6a27849f7875!2sJetpur%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1659620696194!5m2!1sen!2sin" allowfullscreen=""></iframe>

            </div>
        </div>
    </section>
    <!-- //contact map -->

    <!--/contact-->
    <section class="w3l-contact-main w3l-contact-info py-5" id="contact">
        <div class="midd-w3 py-md-5">
            <div class="container">
                <div class="row contact-infos pt-lg-4">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-map-marked-alt"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Location</h3>
                                <p>Matva Sheri ,</p>
                                <p>jetpur</p>
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
