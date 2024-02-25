@extends('layouts.app')

@section('content')

<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h1>Edit Vendor Invoice</h1>
        </div>
        <div class="card-body">
            @include('adminlte-templates::common.errors')

            <div class="basic-form-wrapper">
                {!! Form::model($vendordata, ['route' => ['vendordatas.update', $vendordata->id], 'method' => 'patch']) !!}
                <div class="card-body">
                    <div class="row">
                        <!-- Ensure the invoice number remains unchanged -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('invoiceNo', 'Invoice no:') !!}
                            {!! Form::text('invoiceNo', $vendordata->invoiceNo, ['class' => 'form-control', 'maxlength' => 255, 'readonly' => 'readonly']) !!}
                        </div>
                        <div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('productServiceId', 'Client Services:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('productServiceId', $prod->pluck('productServiceName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select Client Services', 'id' => 'productServiceId', 'onchange' => 'fetchInitiatedQuantity()']) !!}
        </div>
    </div>
</div>


<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceAmount', 'Amount:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('invoiceAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceMonth', 'Month:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::selectMonth('invoiceMonth', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceYear', 'Year:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::selectRange('invoiceYear', now()->year, now()->year + 10, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceDate', 'Date:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::date('invoiceDate', isset($vendordata) ? $vendordata->invoiceDate : null, ['class' => 'form-control', 'id' => 'invoiceDate']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3" style="display: none;">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('addedBy', 'Added by:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="layout-button mt-0">
                        <a href="{{ route('vendordatas.index') }}" class="btn btn-default btn-squared border-normal bg-normal px-20">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- ends: .card -->
</div>

@endsection
