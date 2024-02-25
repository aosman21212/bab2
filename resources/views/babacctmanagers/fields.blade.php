<div class="form-group mb-3">
    <div class="row">
        <!-- Acctmanagername Field -->
        <div class="form-group col-sm-3 d-flex align-items-center">
            {!! Form::label('AcctManagerName', 'Name:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('AcctManagerName', null, ['class' => 'form-control form-control-lg', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Acctmanagercontact Field -->
        <div class="form-group col-sm-3 d-flex align-items-center">
            {!! Form::label('AcctManagerContact', 'Contact number ', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('AcctManagerContact', null, ['class' => 'form-control form-control-lg', 'maxlength' => 20]) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Acctmanageremail Field -->
        <div class="form-group col-sm-3 d-flex align-items-center">
            {!! Form::label('AcctManagerEmail', 'Email:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('AcctManagerEmail', null, ['class' => 'form-control form-control-lg', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <!-- Acct Manager Status Field -->
        <div class="form-group col-sm-3 d-flex align-items-center">
            {!! Form::label('AcctManagerStatus', 'Status:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('AcctManagerStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control form-control-lg']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3" style="display: none;">
    <div class="row">
        <!-- Hidden Added By Field -->
        <div class="form-group col-sm-3 d-flex align-items-center">
            {!! Form::label('addedBy', 'Added By:', ['class' => 'col-form-label color-dark fs-14 fw-500 align-center']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control form-control-lg', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>
