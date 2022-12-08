@extends('frontend.layouts.all_main')

@section('all-main-container')
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Product</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> All Product </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
<section class="w3l-team py-5" id="w3l-team">
    <div class="container py-md-5">
        <div class="row text-left">
            <div class="col-md-3 mt-md-5 pe-lg-5">
                <div class="title-content text-left">
                    <h6 class="title-subw3hny" >Baby Care</h6>
                    <hr style="border: 5px solid rgb(0, 0, 0);">

                    <h3 class="title-w3l mb-2" >Ctegory</h3>
                    <a class="btn btn-style btn-primary mt-md-2 mt-2" href="{{ url('/') }}"> View Category <span class="fas fa-arrow-right ms-2"></span></a>
<hr style="border: 5px solid rgb(0, 0, 0);">
                    <h3 class="title-w3l mb-2" style="margin-top: 20px;">Brands</h3>
                    <a class="btn btn-style btn-primary mt-md-2 mt-2" href="{{ url('/') }}"> View Brands <span class="fas fa-arrow-right ms-2"></span></a>
                </div>
            </div>
            @foreach ($product as $data )
            <div class="col-md-3 col-6 mt-5">
                <div class="team-grids text-center">
                    <img src="{{ URL('backend/images/product/'.$data->pro_img)}}" style="width:250px;height:400px;" class="img-fluid" alt="">
                </div>
                <h4 style="height: 60px;">{{$data->pro_name}}</h4>
                <h6>Rs. {{$data->pro_price}}</h6>
                <a class="btn btn-style btn-primary" href="/product_details/{{$data->pro_id}}"> View More Details <span class="fas fa-arrow-right ms-2"></span></a>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- team -->
@endsection
