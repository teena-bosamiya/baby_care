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
                  <h4 class="card-title">View Product</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>PRICE</th>
                          <th>IMAGE</th>
                          <th>Unit</th>
                          <th>DESCRIPTION</th>
                          <th>ACTION</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($product as $data )
                        <tr>
                          <td>{{$data->pro_id}}</td>
                          <td>{{$data->pro_name}}</td>
                          <td>{{$data->pro_price}}</td>
                          <td><img src="{{URL('backend/images/product/'. $data->pro_img)}}" style="height: 200px; width: 150px; border-radius:0px;" /></td>
                          <td>{{$data->pro_unit}} ML</td>
                          <td>{{$data->pro_description}}</td>
                          <td><span>
                            <a href="edit_product/{{$data->pro_id}}" class="mr-4" data-toggle="tooltip"
                                   data-placement="top" title="Edit"><img src="{{URL('backend/images/edit.png')}}"><i
                                       class="fa fa-pencil color-muted"></i> </a>

                                       <a
                                   href="delete_product/{{$data->pro_id}}" data-toggle="tooltip"
                                   data-placement="top" title="Delete"><i
                                       class="fa fa-close color-danger"><img src="{{URL('backend/images/delete.png')}}"></i></a></span>
                       </td>
                          <td><label class="badge">
                              @if ($data->pro_status==1)
                            <span>
                                <a href="change_pro_status/{{$data->pro_id}}" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="{{URL('backend/images/active.png')}}"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            @else
                            <span>
                                <a href="change_pro_status/{{$data->pro_id}}" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="{{URL('backend/images/deactive.png')}}"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            @endif</label></td>
                        </tr>
                        @endforeach
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
