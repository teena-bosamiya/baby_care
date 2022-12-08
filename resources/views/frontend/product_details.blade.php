@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->

    @php
    $pro_id="";
    @endphp
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Product Details</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Product All Details</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-servicesblock-->
<section class="w3l-circles py-5" id="services">
    <div class="container py-md-5 py-2">
        <!--/row-2-->
        @foreach ($product as $data )
        <div class="row w3l-circles">
            <div class="col-lg-6 circles-left">
                <img src="{{URL('backend/images/product/'. $data->pro_img)}}" style="width:300px;height:500px;"  alt="" class="radius-image img-fluid">
            </div>
            @php
                $pro_id= $data->pro_id ;
            @endphp
            <div class="col-lg-6 circles-right mt-lg-0 mt-5 align-self  position-relative">
                <h3 class="title-w3l mb-4">{{$data->pro_name}}</h3>
                <div class="title-subw3hny" >Price :- </div> <div style="margin-bottom: 20px; margin-top:-10px;"> Rs. {{$data->pro_price}}</div>
                <div class="title-subw3hny">Unit :- </div><div style="margin-bottom: 20px;margin-top:-10px;">{{$data->pro_unit}} ML</div>
                <div class="title-subw3hny">Description :- </div><div style="margin-bottom: 20px;margin-top:-10px;">{{$data->pro_description}}</div>
                <div class="w3banner-content-btns">
                    <form action="{{ route('add_to_cart') }}" method="post">
                        @csrf
                        <div class="title-subw3hny" >Enter Quentity :- </div>
                        <input type="hidden" value="{{$data->pro_id}}" name="pro_id"/>
                   <input type="text" class=" text-center" role="number" placeholder="enter Quentity" name="quantity" value="1">
                    <button class="btn-holder btn btn-success btn-block text-center" name="submit" >Add To Cart</button>
                </form>
                </div>
            </div>
        </div>
        @endforeach
        <!--//row-2-->
    </div>
</section>
@if (session()->has('user_id'))
@php
    $user_id =  session()->get('user_id');
@endphp
<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-md-5">
            <div class="title-content text-center mb-md-5 mb-4">
                <h6 class="title-subw3hny">Welcome to Baby Care World.</h6>
                <h3 class="title-w3l mx-lg-5">Product Review</h3>
            </div>
            <div class="top-map">
                <div class="map-content-9">
                    <form method="post" action="{{ url('/') }}/give_review" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" class="form-control"  value="@php echo $user_id; @endphp">
                        <input type="hidden" name="pro_id" class="form-control"  value="@php echo $pro_id; @endphp">
                        <div class="form-top1">
                            <div class="form mt-5">
                                <label>Subject</label>
                                <input type="text" name="subject" placeholder="Enter Subject" required="">
                                <span class="text-danger">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form mt-5">
                                <label>Review</label>
                                <textarea name="review" placeholder="Enter Your Valuable Review" required="" style="margin-top:0px;"> </textarea>
                                <span class="text-danger">
                                    @error('review')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-style btn-primary">Submit Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-md-5">
            <div class="title-content text-center mb-md-5 mb-4">
                <h6 class="title-subw3hny">Welcome to Baby Care World.</h6>
                <h3 class=" mx-lg-5">
                    <a class="title-subw3hny" href="{{ url('/user_login') }}">Login</a>
                     <label class="text-danger" >Required For Review</label>
                </h3>
            </div>
        </div>
    </div>
</section>
@endif
<!--//w3l-servicesblock-->
            <div class="title-content text-center mb-md-5 mb-4">
                <h1 style="color:rgba(212, 88, 16, 0.959);">Review</h1>

            </div>
<section class="w3l-circles py-5" id="services">
    <div class="container py-md-5 py-2">
        <!--/row-2-->

        @foreach ($feedback as $data )
        <div class="row ">
            <div class="col-lg-12 circles-right mt-lg-0 mt-5 align-self  position-relative">
                @foreach ($user as $data1 )
                    @if($data->user_id == $data1->user_id)
                    <h5 class="titlel mb-2">{{$data1->user_name}}</h5>
                    <div class="title">{{$data1->user_email }}</div>
                    @endif
                @endforeach
                <div class="title-subw3hny mb-2" >{{$data->feed_sub}}</div>
                <div class="title-subw3hny mb-2">Review :- </div><div style="margin-bottom: 20px;margin-top:-10px;">{{$data->feed_messege}}</div>
                <div class="w3banner-content-btns">
                </div>
            </div>
        </div>
        <hr style="border: 0.5px solid orange; border-radius:50%;">
        @endforeach
        <!--//row-2-->
    </div>
</section>
@endsection
