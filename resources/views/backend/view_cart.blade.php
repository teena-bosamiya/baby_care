@extends('backend.layouts.main')

@section('main-container')

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Cart</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>USER ID</th>
                          <th>PRODUCT ID</th>
                          <th>TOTAL PRICE</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($cart_arr as $data)
                            <tr>
                                <td>{{ $data['cart_id']  }}</td>
                                <td>{{ $data['user_email']  }}</td>
                                <td>{{ $data['product']  }}</td>
                                <td>{{ $data['total_price']  }}</td>
                            </tr>
                          @endforeach
                        {{-- @foreach ($cart as $data )
                        <tr>
                          <td>{{ $data->cart_id  }}</td>
                          @foreach ($user_email as $data1 )
                          @if($data->user_id == $data1->user_id)
                          <td>{{ $data1->user_email  }}</td>
                          @endif
                          @endforeach
                          <td>{{ $data->pro_id  }}</td>
                          <td>{{ $data->total_price  }}</td>
                        </tr>
                        @endforeach --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
        </div>
        <!-- content-wrapper ends -->
      @endsection
