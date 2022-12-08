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
                      @if(session()->has('message'))

                    <h6 class="text-danger"> {{ session()->get('message') }}</h6>
                    <hr>
                    @endif
                      <p class="card-description">
                        Baby Products Brands
                      </p>
                      <form class="forms-sample" method="POST" action="{{ url('/') }}/insert_brand" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Brand Name</label>
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Product Brand Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label >Brand Logo</label>
                            <input type="file" name="logo" class="form-control" value="{{ old('logo') }}" placeholder="Product Brand Image">
                            <span class="text-danger">
                                @error('logo')
                                    {{ $message }}
                                @enderror
                            </span>
                          </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
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
