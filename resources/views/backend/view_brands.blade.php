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
                  <h4 class="card-title">View Brands</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>ACTION</th>
                            <th>STATUS</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($brand as $data )
                        <tr>
                          <td>{{ $data->brand_id  }}</td>
                          <td>{{ $data->brand_name  }}</td>
                          <td><img src="{{URL('backend/images/brand/'. $data->brand_logo)}}" style="height: 200px; width: 250px; border-radius:0px;" /></td>
                          <td><span>
                            <a href="edit_brand/{{$data->brand_id}}" class="mr-4" data-toggle="tooltip"
                                   data-placement="top" title="Edit"><img src="{{URL('backend/images/edit.png')}}"><i
                                       class="fa fa-pencil color-muted"></i> </a>

                                       <a
                                   href="delete_brand/{{$data->brand_id}}" data-toggle="tooltip"
                                   data-placement="top" title="Delete"><i
                                       class="fa fa-close color-danger"><img src="{{URL('backend/images/delete.png')}}"></i></a></span>
                       </td>
                          <td><label class="badge">
                            @if ($data->brand_status==1)
                            <span>
                                <a href="change_brand_status/{{$data->brand_id}}" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="{{URL('backend/images/active.png')}}"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            @else
                            <span>
                                <a href="change_brand_status/{{$data->brand_id}}" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="{{URL('backend/images/deactive.png')}}"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            @endif
                        </label></td>
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
