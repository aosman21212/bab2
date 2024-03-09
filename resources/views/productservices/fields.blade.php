<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Productservicename Field -->
            {!! Form::label('productServiceName', 'Product Service Name:', ['class' => 'col-form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('productServiceName', $productServices, null, ['class' => 'form-control', 'maxlength' => 191]) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Client ID Field -->
            {!! Form::label('clientId', 'Client Name:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('clientId', $clients->pluck('clientName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select client']) !!}
        </div>
    </div>
</div>
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Vendor ID Field -->
            {!! Form::label('vendorId', 'Vendor Name:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('vendorId', $venders->pluck('vendorName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select vendor']) !!}
        </div>
    </div>
</div>
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Recurringperiod Field -->
            {!! Form::label('recurringPeriod', 'Recurring Period:', ['class' => 'col-form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('recurringPeriod', ['Monthly' => 'Monthly', 'Yearly' => 'Yearly'], null, ['class' => 'form-control', 'placeholder' => 'Select Period']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Service Type ID Field -->
            {!! Form::label('ServiceTypeId', 'Service Type:', ['class' => 'col-form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('ServiceTypeId', $serviceTypes, null, ['class' => 'form-control', 'placeholder' => 'Select service type']) !!}
        </div>
    </div>
</div>


<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Initiatedquantity Field -->
            {!! Form::label('initiatedQuantity', 'Initiated Quantity:', ['class' => 'col-form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('initiatedQuantity', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Recurringfees Field -->
            {!! Form::label('recurringFees', 'Recurring Fees:', ['class' => 'col-form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('recurringFees', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- Additionalfees Field -->
            {!! Form::label('additionalFees', 'Additional Fees:', ['class' => 'col-form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('additionalFees', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<div class="form-group mb-3" style="display: none;">
    <div class="row">
        <div class="form-group col-sm-3 d-flex align-items-center">
            <!-- Hidden Added By Field -->
            {!! Form::label('addedBy', 'Added By:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control form-control-lg', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>



<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            <!-- ProductService Status Field -->
            {!! Form::label('productServiceStatus', 'Status:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('productServiceStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
