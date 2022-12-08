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
                      <h4 class="card-title">Add Product</h4>
                      @if(session()->has('message'))

                    <h6 class="text-danger"> {{ session()->get('message') }}</h6>
                    <hr>
                    @endif
                      <p class="card-description">
                       Baby Care Product
                      </p>
                      <form class="forms-sample" method="POST" action="{{ url('/') }}/insert_product" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" class="form-control" value="{{ old('name') }}" name="name"  placeholder="Product Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label>Select Category</label>

                            <select class="form-control form-control-lg" name="cat_id" >
                                @foreach ($category as $cat_data )
                                  <option value="{{ $cat_data->cat_id  }}">{{ $cat_data->cat_name  }}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Brand</label>
                            <select class="form-control form-control-lg" name="brand_id">
                                @foreach ($brands as $data )
                                          <option value="{{ $data->brand_id  }}">{{ $data->brand_name  }}</option>
                                       @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="price" class="form-control" value="{{ old('price') }}"  placeholder="Product Price">
                            <span class="text-danger">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" class="form-control"   placeholder="Product Image">
                            <span class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label>Enter Unit In ML</label>
                            <input type="text" name="unit" class="form-control" value="{{ old('unit') }}"  placeholder="Product Unit In ML">
                            <span class="text-danger">
                                @error('unit')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="details" value="{{ old('details') }}" placeholder="Produc Description"></textarea>
                            <span class="text-danger">
                                @error('details')
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
