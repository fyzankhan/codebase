@extends('layouts.backend')

@section('content')
<main id="main-container" style="min-height: 250px;">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Design -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Add New User</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content" style="padding: 27px 0px 20px 171px;">
                                

                                        <form method="POST" action="{{ route('users.store') }}">
                                         @csrf
                                       
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" id="fname" name="fname" placeholder="First Name">
                                                @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" id="lname" name="lname" placeholder="Last Name">
                                                 @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" value="{{ old('name') }}" placeholder="Username">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12">Status</label>
                                            <div class="col-12">
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="status" id="example-inline-radio1" value="active" checked="">
                                                    <label class="custom-control-label" for="example-inline-radio1">Active</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="status" id="example-inline-radio2" value="inactive">
                                                    <label class="custom-control-label" for="example-inline-radio2">Inactive</label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-email-input">Expiration</label>
                                            <div class="col-md-9">
                                                <input type="date" name="expiration" class="form-control @error('expiration') is-invalid @enderror" id="expiration" value="{{ old('expiration') }}">
                                                 @error('expiration')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-email-input">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Email..">
                                                 @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-password-input">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password..">
                                                 @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12" for="example-password-input">Confirm Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required placeholder="New Password..">
                                            
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <label class="col-12">Type</label>
                                            <div class="col-12">
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="type" id="type-inline-radio1" value="admin" checked="">
                                                    <label class="custom-control-label" for="type-inline-radio1">Admin</label>
                                                </div>

                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="type" id="type-inline-radio2" value="user" >
                                                    <label class="custom-control-label" for="type-inline-radio2">User</label>
                                                </div>
                                               
                                               
                                             
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select">Select Profile</label>
                                            <div class="col-md-9">
                                                <select class="form-control @error('profile_id') is-invalid @enderror" id="example-select" name="profile_id" >
                                                    <option >Please select</option>
                                                    @foreach($profiles as $profile)
                                                    <option value="{{$profile->id}}">{{$profile->profile_name}}</option>
                                                    @endforeach

                                                </select>
                                                @error('profile_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                    
                              
                                    
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>
                       
                    </div>
                   
                 
                </div>
                <!-- END Page Content -->
            </main>
@endsection