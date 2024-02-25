@extends('layouts.app')

@section('content')

<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Adding Vendors Datas
</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        
                                    </div>
                                    <!-- <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <a class="btn btn-primary float-right"
                                    href="{{ route('vendors.index') }}">
                                            <i class="la la-plus"></i> Back</a>
                                    </div>
                                </div>
                            </div>
                    
               
                        </div>

                    </div>
                </div>
            </div>

<div class="card card-horizontal card-default card-md mb-4">

<div class="col-lg-12">
                                    <div class="card card-horizontal card-default card-md mb-4">
                                 
                                        @include('adminlte-templates::common.errors')

                                        <div class="card-body py-md-30">
                                            <div class="horizontal-form">
                                            {!! Form::open(['route' => 'vendors.store','enctype' => 'multipart/form-data']) !!}
                                            @include('vendors.fields')

                                                    <div class="card-footer">
                    <div class="layout-button mt-0">
                        <a href="{{ route('vendors.index') }}" class="btn btn-default btn-squared border-normal bg-normal px-10">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-default btn-squared px-20">Save</button>
                    </div>
                </div>
                
                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ends: .card -->

                                </div>
</div>
 
@endsection
