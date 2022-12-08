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
                  <h4 class="card-title">View Feedback</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCT ID</th>
                            <th>USER ID</th>
                            <th>TITLE</th>
                            <th>MESSEGE</th>
                            <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($feed as $data )
                        <tr>
                          <td>{{ $data->feed_id  }}</td>
                          <td>{{ $data->pro_id  }}</td>
                          <td>{{ $data->user_id  }}</td>
                          <td>{{ $data->feed_sub  }}</td>
                          <td>{{ $data->feed_messege  }}</td>
                          <td><label class="badge">
                            @if ($data->feed_status==1)
                            <span>
                                <a href="change_feed_status/{{$data->feed_id}}" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="{{URL('backend/images/active.png')}}"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            @else
                            <span>
                                <a href="change_feed_status/{{$data->feed_id}}" class="mr-4" data-toggle="tooltip"
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
