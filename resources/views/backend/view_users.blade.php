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
                  <h4 class="card-title">View Users Details</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>USER ID</th>
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>PHONE</th>
                          <th>CITY</th>
                          <th>STATE</th>
                          <th>PIN CODE</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $data )
                        <tr>
                          <td>{{ $data->user_id  }}</td>
                          <td>{{ $data->user_name  }}</td>
                          <td>{{ $data->user_email  }}</td>
                          <td>{{ $data->user_phone  }}</td>
                          <td>{{ $data->user_city  }}</td>
                          <td>{{ $data->user_state  }}</td>
                          <td>{{ $data->user_pin_code  }}</td>
                          <td><label class="badge">
                            @if ($data->user_status==1)
                            <span>
                                <a href="change_user_status/{{$data->user_id}}" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="{{URL('backend/images/active.png')}}"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            @else
                            <span>
                                <a href="change_user_status/{{$data->user_id}}" class="mr-4" data-toggle="tooltip"
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
