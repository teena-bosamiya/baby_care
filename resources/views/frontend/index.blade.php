@extends('frontend.layouts.main')

@section('main-container')

    <!--/About-section-->
    <section class="w3l-about-6 py-5" id="about">
        <div class="container py-lg-5 py-md-3">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h6 class="title-subw3hny">Our Baby Care</h6>
                    <h3 class="title-w3l">Product Category</h3>
                    <ul class="service-list pt-lg-2 mt-4">
                        @foreach ($category as $data )
                        <li class="service-link">
                            <a href="cat_product/{{$data->cat_id}}">
                                <img src="{{URL('backend/images/category/'. $data->cat_img)}}" alt="" style="width: 20px; height:20px;" >

                                {{ $data->cat_name  }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5">
                    <div class="row position-relative">
                        <div class="col-6">
                            <img src="{{url('frontend/images/baby.jpg') }}" style="margin-top: 130px;" alt="" class="radius-image img-fluid">
                        </div>
                        <div class="col-6 mt-4">
                            <img src="{{url('frontend/images/boy.png')}}" alt="" class="radius-image img-fluid mb-md-3 mb-2">
                            <img src="{{url('frontend/images/girl.jpg') }}" alt="" class="radius-image img-fluid mt-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//About-section-->
    <!--/w3l-grids-3hny-->
    <section class="w3l-grids-3hny py-5" id="grids1">
        <div class="container py-lg-5 py-md-3">
            <div class="wthree-header-section text-center">
                <h6 class="title-subw3hny">What We Have In</h6>
                <h3 class="title-w3l mb-4">BRANDS Of Baby Products</h3>
            </div>

            <div class="grids-of-3 row text-center">
                 @foreach ($brand as $data )
                 <div class="col-lg-4 col-md-6 mt-5">
                    <div class="grids3-info">
                        <a href="brand_product/{{$data->brand_id}}" class="d-block zoom"><img style="width: 400px; height:250px;" src="{{URL('backend/images/brand/'. $data->brand_logo)}}" alt="" class="img-fluid radius-image"></a>
                        <div class="grids-of-3-saas-info">
                            <h5><a href="brand_product/{{$data->brand_id}}" class="title" style="border:1px solid black">{{ $data->brand_name  }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--//w3l-grids-3hny-->
    <!--/testimonials-->
    <section class="w3l-testimonials" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
                <h5 class="title-subw3hny text-center mb-1">Happy Babies</h5>
                <h3 class="title-w3l two text-center mb-sm-5 mb-4">About Baby Care</h3>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>
                                            Baby products are specially formulated to be mild
                                            and
                                            non-irritating
                                            and
                                            use ingredients that are selected for these properties.
                                            Baby products include baby shampoos, baby Wash
                                            and baby lotions, baby oils and baby creams.
                                            Now a days even baby cologne, baby perfume etc.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{url('frontend/images/babyuser.png') }}" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Veenchhee Teena</h3>
                                            <p class="indentity">Jetpur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->
    <!--/home-stats-->
    <section class="w3l-stats-main py-5" id="stats">
        <div class="container py-lg-4">
            <div class="row stats-con">
                <div class="col-lg-6 stats-content-left pe-lg-5">
                    <div class="stats_info counter_grid1 text-left">
                        <div class="icon stat-icon">
                            <div class="testi-des">
                                <div class="test-img"><img src="{{url('frontend/images/nature.jpg') }}" class="img-fluid" alt="client-img">
                                </div>
                            </div>
                        </div>
                        <div class="stat-icon-des text-left">

                            <h3 class="title-w3l">

                                Natural
                            </h3>
                            <p class="para-stat">“Everything in nature invites us constantly to be what we are.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 stats-content-left ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                    <div class="stats_info counter_grid1 text-left">
                        <div class="icon stat-icon">
                            <div class="testi-des">
                                <div class="test-img"><img src="{{url('frontend/images/quality.jpg') }}" class="img-fluid" alt="client-img">
                                </div>
                            </div>
                        </div>
                        <div class="stat-icon-des text-left">
                            <h3 class="title-w3l">
                                Best Quality Standards</h3>
                            <p class="para-stat">Product quality refers to how well a product satisfies customer needs, serves its purpose and meets industry standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//home-stats-->

@endsection
