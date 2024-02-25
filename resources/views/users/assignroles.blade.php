@extends('layouts.app')

@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">ROLES </h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        
                                    </div>
                                    <!-- <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" fdprocessedid="kg8coj">
                                            <i class="la la-download"></i> Export
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Export With</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-print"></i> Excel</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-pdf"></i> PDF</a>
                                          
                                        </div>
                                    </div> -->
                              

                                    <div class="action-btn">
                                    
                                 
                                </div>
                            </div>
                    
               
                        </div>

                    </div>
                </div>
            </div>
    <div class="card card-default card-md mb-4">
        <div class="card-header py-20">
            <h6>Roles for User: <b>{{$user->name}}</b></h6>
        </div>
        <div class="card-body pt-sm-20 pt-3">
            {!! Form::model($user, ['route' => ['roles.rolesupdate', $user->id], 'method' => 'patch']) !!}
                <div class="checkbox-list">
                    @foreach($roles as $role)
                        <div class="checkbox-list__single mb-3">
                            <div class="checkbox-group d-flex">
                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                    <input class="checkbox" type="checkbox" id="role-{{$role->id}}" name="role[{{$role->id}}]"
                                        @if($user->hasRole($role)) checked @endif>
                                    <label for="role-{{$role->id}}">
                                        <span class="checkbox-text">{{$role->name}}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-group d-flex justify-content-between">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('roles.index') !!}" class="btn btn-default">Cancel</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
