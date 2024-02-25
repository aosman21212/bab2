@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">client Data</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                    
                        <div class="action-btn">
                        <form action="{{ route('clientdatareports.export') }}" method="GET">
    <!-- <div class="form-group">
        <input type="text" name="clientId" placeholder="Client ID" class="form-control">
    </div> -->
    <button type="submit" class="btn btn-sm btn-default btn-white">
        <i class="la la-download"></i> Export Excel
    </button>
</form>

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
                @include('clientdatareports.table')
            </div>
        </div>
    </div>
</div>

@endsection
