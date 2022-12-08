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
                      <h4 class="card-title">Add Category</h4>
                      @if(session()->has('message'))

                    <h6 class="text-danger"> {{ session()->get('message') }}</h6>
                    <hr>
                    @endif
                     <p class="card-description">
                        Baby Product Category
                      </p>
                      <form class="forms-sample" method="POST" action="{{ url('/') }}/insert_category" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}"  placeholder="Product Category Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" class="form-control" value="{{ old('image') }}"  placeholder="Product Category Image">
                            <span class="text-danger">
                                @error('image')
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
