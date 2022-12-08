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
@if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                    @endif
                    <div class="col-lg-12 circles-right mt-lg-0 mt-5 align-self  position-relative">
                        <h3 class="title-w3l mb-4">Cart List</h3>
                        <hr>
                    </div>
<table id="cart" class="table table-hover table-condensed" >
    <thead>
        <tr>
            <th style="width:50%" class="text-center">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%">Action</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @php
        $i="";

        @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{URL('backend/images/product/'. $details['image'] ) }}" width="100" height="150" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rs. {{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        {{ $details['quantity'] }}
                    </td>
                    <td data-th="Subtotal" class="text-center">Rs. {{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <form action="{{ url('/remove-from-cart') }}">
<input type="hidden" name="id" value="{{ $id }}">
                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>


                    </form>
                    @php

                      $i = $i.",".$id."-".$details['quantity'];
                      @endphp


                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total Rs. {{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <form action="buyCart" method="post">
                @csrf
            <td colspan="5" class="text-right">
                <input type="hidden" value="@php echo $i; @endphp" name="id">
                <input type="hidden" name="total" value="{{ $total }}">
                <a href="{{ url('/product') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
            </td>
        </form>
        </tr>
    </tfoot>
</table>
</div></section>
@section('scripts')
<script type="text/javascript">

    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>

@endsection
@endsection


<style type="text/css">
.img_thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}
.img_thumbnail img {
    width: 100%;
}
.img_thumbnail .caption{
    margin: 7px;
    text-align: center;
}
.dropdown{
    float:right;
    padding-right: 30px;
}
.btn{
    border:0px;
    margin:10px 0px;
    box-shadow:none !important;
}
.dropdown .dropdown-menu{
    padding:20px;
    top:30px !important;
    width:350px !important;
    left:-110px !important;
    box-shadow:0px 5px 30px black;
}
.total-header-section{
    border-bottom:1px solid #d2d2d2;
}
.total-section p{
    margin-bottom:20px;
}
.cart-detail{
    padding:15px 0px;
}
.cart-detail-img img{
    width:100%;
    height:100%;
    padding-left:15px;
}
.cart-detail-product p{
    margin:0px;
    color:#000;
    font-weight:500;
}
.cart-detail .price{
    font-size:12px;
    margin-right:10px;
    font-weight:500;
}
.cart-detail .count{
    color:#000;
}
.checkout{
    border-top:1px solid #d2d2d2;
    padding-top: 15px;
}
.checkout .btn-primary{
    border-radius:50px;

}
.dropdown-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:50px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}</style>
