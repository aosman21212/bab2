@extends('layouts.app')

@section('content')


<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Client data Details</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        
                                    </div>
                                  
                                  
                                    <div class="action-btn">
                                    <a class="btn btn-primary float-right"
                                    href="{{ route('clientdatas.index') }}">
                        

<i class="la la-plus"></i> back</a>
                                    </div>
                                </div>
                            </div>
                    
               
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="userDatatable orderDatatable global-shadow border py-30 px-sm-30 px-20 bg-white radius-xl w-100 mb-30">
                        @include('clientdatas.show_fields')

                        </div><!-- End: .userDatatable -->
                    </div><!-- End: .col -->
                </div>
            </div>
@endsection

