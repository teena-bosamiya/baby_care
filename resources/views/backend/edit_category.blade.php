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
                      <h4 class="card-title">Edit Category</h4>
                      <p class="card-description">
                        @if(session()->has('message1'))

                    <h6 class="text-danger"> {{ session()->get('message1') }}</h6>
                    <hr>
                    @endif
                        Baby Product Category
                      </p>
                      <form class="forms-sample" method="POST" action="{{ url('/') }}/update_category" enctype="multipart/form-data">
                        @csrf
                        @foreach ($category as $data )
                        <div class="form-group">
                            <input type="hidden" name="cat_id" class="form-control input-default " value="{{ $data->cat_id }}">

                          <label>Name</label>
                          <input type="text" name="name" class="form-control" value="{{ $data->cat_name  }}"  placeholder="Product Category Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label >Image</label>
                            <img src="{{URL('backend/images/category/'. $data->cat_img)}}" style="height: 100px; width: 150px;" />
                            <input type="file" name="image" class="form-control"  placeholder="Product Category Image">
                            <span class="text-danger">
                                @error('image')
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
