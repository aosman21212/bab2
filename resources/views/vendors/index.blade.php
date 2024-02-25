@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">vendors </h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <div class="action-btn"></div>
                        <div class="action-btn">
                            <a class="btn btn-primary float-right" href="{{ route('vendors.create') }}">
                                <i class="la la-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-lg-12 mb-30">
        @if(session()->has('flash_notification.message'))
            <div class="alert alert-{{ session('flash_notification.level') }}">
                {{ session('flash_notification.message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                @include('vendors.table')
            </div>
        </div>
    </div>
</div>

@endsection
