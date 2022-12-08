@extends('backend.layouts.main')

@section('main-container')

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="margin-left:25%;">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">View And Update Your Details</h4>
                      <p class="card-description">
                        View Details
                      </p>
                      <form class="forms-sample" method="post" action="{{ url('/') }}/update_admin" enctype="multipart/form-data">
                        @csrf
                        @foreach ($admin as $data )

                        <input type="hidden" name="admin_id" class="form-control input-default " value="{{ $data->admin_id }}">

                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name"  placeholder="Admin Name" value="{{ $data->admin_name }}">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"   placeholder="Admin Email" value="{{ $data->admin_email }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control"  placeholder="Admin Phone Number" value="{{ $data->admin_phone }}">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label >Image</label>
                            <img src="{{URL('backend/images/admin/'. $data->admin_pic)}}" style="height: 100px; width: 150px;" />
                            <input type="file" name="image" class="form-control"  placeholder="Product Image">
                        </div>
                        <div class="form-group">
                            <label>Address Line 1</label>
                            <input type="text" class="form-control" name="address1"  placeholder="Admin Address Line 1" value="{{ $data->admin_address_line1 }}">
                            <span class="text-danger">
                                @error('address1')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Address line 2</label>
                            <input type="text" class="form-control" name="address2"  placeholder="Admin Address Line 2" value="{{ $data->admin_address_line2 }}">
                            <span class="text-danger">
                                @error('address2')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city"  placeholder="Admin City" value="{{ $data->admin_city }}">
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" name="state"  placeholder="Admin State" value="{{ $data->admin_state }}">
                            <span class="text-danger">
                                @error('state')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Pin-code</label>
                            <input type="text" name="pincode" class="form-control"  placeholder="Admin Pin-Code" value="{{ $data->admin_pin_code }}">
                            <span class="text-danger">
                                @error('state')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        @endforeach
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
        <!-- content-wrapper ends -->
      @endsection
