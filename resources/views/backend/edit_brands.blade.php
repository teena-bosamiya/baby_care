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
                      <h4 class="card-title">Add Brands</h4>
                      <p class="card-description">
                        Baby Products Brands
                      </p>
                      <form class="forms-sample" method="post" action="{{ url('/') }}/update_brand" enctype="multipart/form-data">
                        @csrf
                        @foreach ($brand as $data )
                        <input type="hidden" name="brand_id" class="form-control input-default " value="{{ $data->brand_id }}">

                        <div class="form-group">
                          <label>Brand Name</label>
                          <input type="text" name="name" required class="form-control" value="{{ $data->brand_name  }}" placeholder="Product Brand Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label >Brand Logo</label>
                            <img src="{{URL('backend/images/brand/'. $data->brand_logo)}}" style="height: 100px; width: 150px;" />
                            <input type="file" name="logo" class="form-control" value="{{ old('logo') }}" placeholder="Product Brand Image">

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
