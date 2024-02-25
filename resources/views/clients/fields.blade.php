<!-- Client Name Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('clientName', 'Client Name:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('clientName', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<!-- Client Logo Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('clientLogo', 'Logo:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            @if(isset($clients) && isset($clients->clientLogo))
                <img src="{{ asset('storage/' . $clients->clientLogo) }}" alt="Client Logo" style="max-width: 100px;">
                <br>
            @endif
            {!! Form::file('clientLogo', ['class' => 'form-control-file']) !!}
        </div>
    </div>
</div>

<!-- Contact Name Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('contactName', 'Contact Name:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('contactName', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<!-- Mobile Number Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('mobileNo', 'Mobile Number:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('mobileNo', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<!-- Email Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('email', 'Email:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<!-- Account Manager Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('babAcctManagerId', 'Account Manager:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('babAcctManagerId', $babacctmanagers->pluck('AcctManagerName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select Account Manager']) !!}
        </div>
    </div>
</div>

<!-- Order Date Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('orderDate', 'Order Date:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::date('orderDate', isset($clients) ? $clients->orderDate : null, ['class' => 'form-control', 'id' => 'orderDate']) !!}
        </div>
    </div>
</div>

<!-- Start Date Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('startDate', 'Start Date:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::date('startDate', isset($clients) ? $clients->startDate : null, ['class' => 'form-control', 'id' => 'startDate']) !!}
        </div>
    </div>
</div>

<!-- Bill To Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('bill_to', 'Bill To:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('bill_to', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<!-- Hidden Added By Field -->
<div class="form-group mb-3" style="display: none;">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('addedBy', 'Added By:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>

<!-- Client Status Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('clientStatus', 'Status:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('clientStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], old('clientStatus', isset($clients) ? $clients->clientStatus : ''), ['class' => 'form-control form-control-lg']) !!}
        </div>
    </div>
</div>
