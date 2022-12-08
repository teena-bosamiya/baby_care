@extends('frontend.layouts.all_main')

@section('all-main-container')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Cart</h2>

                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Cart Product All Details</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<section class="w3l-circles " id="services">
    <div class="container py-md-5 py-2">
                    <div class="col-lg-12 circles-right mt-lg-0 mt-5 align-self  position-relative">
                        <h3 class="title-w3l mb-4">Purchase Oldest</h3>
                        <hr>
                    </div>
<table id="cart" class="table table-hover table-condensed" >
    <thead>
        <tr>
            <th style="width:50%" class="text-center">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">Date</th>

        </tr>
    </thead>
    <tbody>

        @foreach($cart_arr as $data)
        <tr>
            <td>{{ $data['product']  }}</td>
            <td>{{ $data['total_price']  }}</td>

            <td>{{ $data['cart_date']  }}</td>
        </tr>
      @endforeach


    </tbody>
</table>
</div></section>
@endsection
