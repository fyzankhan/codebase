@extends('layouts.backend')

@section('content')
<main id="main-container" style="min-height: 250px;">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Design -->
                    <h2 class="content-heading">Profile Management</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Add New Profile</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                

                                        <form method="POST" action="{{ route('profile.store') }}">
                                         @csrf
                                       
                                        <div class="form-group row">
                                            <label class="col-12" for="example-text-input">Profile Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control @error('profile_name') is-invalid @enderror" name="profile_name" value="{{ old('profile_name') }}" id="profile_name" name="profile_name" placeholder="Name">
                                                @error('profile_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        
                                        <div class="form-group row">
                                            <label class="col-12">Profile Type</label>
                                            <div class="col-12">
                                                 <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="profile_type" id="profile_type1" value="admin" checked="">
                                                    <label class="custom-control-label" for="profile_type1">Admin</label>
                                                </div>
                                               
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="profile_type" id="profile_type2" value="user">
                                                    <label class="custom-control-label" for="profile_type2">User</label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        
                                          <div class="form-group row">
                                            <label class="col-12">Profile Status</label>
                                            <div class="col-12">
                                               <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="profile_status" id="profile_status1" value="active" checked="">
                                                    <label class="custom-control-label" for="profile_status1">Active</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="profile_status" id="profile_status2" value="inactive">
                                                    <label class="custom-control-label" for="profile_status2">Inactive</label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                 
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select">Permissions</label>
                                            <div class="col-md-9">
                                                <select class="form-control @error('profile_id') is-invalid @enderror" id="example-select" name="permission_id" >
                                                    <option >Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
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