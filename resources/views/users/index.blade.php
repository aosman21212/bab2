

@extends('layouts.app')

@section('content')


<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">users  </h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        
                                    </div>
                                    <div class="dropdown action-btn">
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
                                    </div>
                                  
                                    <div class="action-btn">
                                    <!-- <a class="btn btn-primary float-right"
                                    href="{{ route('users.create') }}">
                                            <i class="la la-plus"></i> Add New</a> -->
                                    </div>
                                </div>
                            </div>
                    
               
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
            @include('flash::message')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="userDatatable orderDatatable global-shadow border py-30 px-sm-30 px-20 bg-white radius-xl w-100 mb-30">
                        @include('users.table')

                        </div><!-- End: .userDatatable -->
                    </div><!-- End: .col -->
                </div>
            </div>

@endsection

