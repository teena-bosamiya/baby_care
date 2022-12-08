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
                      <h4 class="card-title">Update Product</h4>
                      <p class="card-description">
                       Baby Care Product
                      </p>
                      <form class="forms-sample" method="POST" action="{{ url('/') }}/update_product" enctype="multipart/form-data">
                        @csrf
                        @foreach ($product as $data )
                        <input type="hidden" name="pro_id" class="form-control input-default " value="{{ $data->pro_id }}">

                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" class="form-control" value="{{ $data->pro_name  }}" name="name"  placeholder="Product Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $data->pro_price  }}"  placeholder="Product Price">
                            <span class="text-danger">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label >Image</label>
                            <img src="{{URL('backend/images/product/'. $data->pro_img)}}" style="height: 200px; width: 150px;" />
                            <input type="file" name="image" class="form-control"   placeholder="Product Image">
                        </div>

                        <div class="form-group">
                            <label>Enter Unit In ML</label>
                            <input type="text" name="unit" class="form-control" value="{{ $data->pro_unit  }}"  placeholder="Product Unit In ML">
                            <span class="text-danger">
                                @error('unit')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="details" value="{{ old('details') }}"  placeholder="Product Description">{{ $data->pro_description  }}
                            </textarea>
                            <span class="text-danger">
                                @error('details')
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
