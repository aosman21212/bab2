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

@php
    // Get the last invoice number from the database
    $lastInvoice = App\Models\Vendordata::orderBy('id', 'desc')->first();
    
    // If there's a last invoice number, extract the numeric part
    $lastInvoiceNumber = $lastInvoice ? (int)substr($lastInvoice->invoiceNo, 1) : 0;
    
    // Calculate the next invoice number
    $nextInvoiceNumber = 'V' . str_pad($lastInvoiceNumber + 1, 3, '0', STR_PAD_LEFT);
@endphp

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceNo', 'Invoice no:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('invoiceNo', $nextInvoiceNumber, ['class' => 'form-control','maxlength' => 255, 'readonly' => 'readonly']) !!}
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
