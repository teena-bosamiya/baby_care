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
                  <h4 class="card-title">View Contact</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>SUBJECT</th>
                          <th>MESSEGE</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($contact as $data )
                        <tr>
                          <td>{{ $data->con_id  }}</td>
                          <td>{{ $data->con_name  }}</td>
                          <td>{{ $data->con_email  }}</td>
                          <td>{{ $data->con_sub  }}</td>
                          <td>{{ $data->con_messege  }}</td>
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
