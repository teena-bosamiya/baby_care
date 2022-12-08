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
                  <h4 class="card-title">View Admin</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>PHONE NUMBER</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($admin1 as $data )
                        <tr>
                          <td>{{ $data->admin_id  }}</td>
                          <td>{{ $data->admin_name  }}</td>
                          <td>{{ $data->admin_email  }}</td>
                          <td>{{ $data->admin_phone  }}</td>
                          <td><label class="badge badge-danger">{{ $data->admin_status }}</label></td>
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
