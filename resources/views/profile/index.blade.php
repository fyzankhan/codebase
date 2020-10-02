@extends('layouts.backend')

@section('content')
<main id="main-container" style="min-height: 250px;">

                <!-- Page Content -->
                <div class="content">

                          @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
                    <!-- Table -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Profile List</h3>
                            <div class="block-options">
                                <div class="block-options-item">
                                   <a href="{{ route('profile.create') }}" class="btn btn-success">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                	@foreach($profiles as $key => $profile)

                                	<?php $key++ ?>
                                    <tr>
                                        <th class="text-center" scope="row">{{$key}}</th>
                                        <td>{{ $profile->profile_name }}</td>
                                        <td>{{ $profile->profile_type }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            @if($profile->profile_status == 'active')
                                            <span class="badge badge-warning">Inactive</span>
                                            @else
                                            <span class="badge badge-success">Active</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a  href="{{ route('profile.edit', $profile->id) }}" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-secondary js-tooltip-enabled"  title="" data-original-title="Delete" data-toggle="modal" data-target="#modal-{{$profile->id}}">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            </div>
             <div class="modal" id="modal-{{ $profile->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('profile.destroy', $profile->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  
                
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        
                        <div class="block-content">
                            <h3>Are you sure you want to delete?</h3>
                            <p>This item will be deleted immediately. You can't undo this action.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-alt-danger">
                            <i class="fa fa-trash"></i> Delete
                        </button>

                    </div>
                </div>
                </form>
            </div>
        </div>
                                        </td>
                                    </tr>
                                	@endforeach
                                  
                                
                                    
                                </tbody>
                            </table>
                            {{ $profiles->links() }}
                            
                        </div>
                    </div>
                    <!-- END Table -->

                  

                    <!-- END Default Table Style -->
                </div>
                <!-- END Page Content -->
            </main>

@endsection