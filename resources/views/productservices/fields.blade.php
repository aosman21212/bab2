<div class="form-group mb-3">
    <div class="row">
        <!-- productServiceName Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('productServiceName', 'Name:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('productServiceName', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Initiatedquantity Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('initiatedQuantity', 'Initiated quantity:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('initiatedQuantity', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Recurringfees Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('recurringFees', 'Recurring fees:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('recurringFees', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Additionalfees Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('additionalFees', 'Additional fees:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('additionalFees', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Recurringperiod Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('recurringPeriod', 'Recurring Period:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('recurringPeriod', ['monthly' => 'Monthly', 'yearly' => 'Yearly'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3" style="display: none;">
    <div class="row">
        <!-- Hidden Added By Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('addedBy','Added By:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Client ID Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('clientId', 'Client Name:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('clientId', $clients->pluck('clientName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- ProductService Status Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('productServiceStatus', 'Status:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('productServiceStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Vendor ID Field -->
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('vendorId', 'Vendor Name:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('vendorId',  $venders->pluck('vendorName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select vendors']) !!}
        </div>
    </div>
</div>
