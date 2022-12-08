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
                      <h4 class="card-title">Add Admin</h4>
                      @if(session()->has('message'))

                    <h6 class="text-danger"> {{ session()->get('message') }}</h6>
                    <hr>
                    @endif
                      <p class="card-description">
                        Add Details
                      </p>
                      <form class="forms-sample" method="post" action="{{ url('/') }}/insert_new_admin" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name"  placeholder="Admin Name">
                          <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="Admin Email">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"  placeholder="Admin Password">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control"  placeholder="Admin Phone Number">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" class="form-control"  placeholder="Product Image">
                        </div>
                        <div class="form-group">
                            <label>Address Line 1</label>
                            <input type="text" class="form-control" name="address1"  placeholder="Admin Address Line 1">
                            <span class="text-danger">
                                @error('address1')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Address line 2</label>
                            <input type="text" class="form-control" name="address2"  placeholder="Admin Address Line 2">
                            <span class="text-danger">
                                @error('address2')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city"  placeholder="Admin City">
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" name="state"  placeholder="Admin State">
                            <span class="text-danger">
                                @error('state')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Pin-code</label>
                            <input type="text" name="pincode" class="form-control"  placeholder="Admin Pin-Code">
                            <span class="text-danger">
                                @error('pincode')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Select Question</label>
                            <select class="form-control form-control-lg" name="question">
                                    <option value="What is your date of birth?">What is your date of birth?</option>
                                    <option value="What was your first car?">What was your first car?</option>
                                    <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                                    <option value="What is your favorite food?">What is your favorite food?</option>
                                    <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <input type="text" name="answer" class="form-control"  placeholder="Admin Answer">
                            <span class="text-danger">
                                @error('answer')
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
