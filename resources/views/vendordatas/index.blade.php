@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Vendor Invoice</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <div class="action-btn">
                            <!-- Export dropdown menu -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-download"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <span class="dropdown-item">Export With</span>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('vendordatas.export', ['format' => 'excel']) }}" class="dropdown-item">
                                        <i class="la la-file-excel"></i> Excel</a>
                                    <!-- Add more export options if needed -->
                                </div>
                            </div>
                        </div>
                        <div class="action-btn">
                            <!-- Add New button -->
                            <a class="btn btn-primary float-right" href="{{ route('vendordatas.create') }}">
                                <i class="la la-plus"></i> Add New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-lg-12 mb-30">
        @include('flash::message')
        <div class="card">
            <div class="card-body p-0">
                @include('vendordatas.table')
            </div>
        </div>
    </div>
</div>

@endsection
