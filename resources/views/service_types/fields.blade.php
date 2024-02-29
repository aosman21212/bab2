

<!-- Client Name Field -->
<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
        {!! Form::label('TypeName', 'Typename:') !!}
            </div>
        <div class="col-sm-9">
        {!! Form::text('TypeName', null, ['class' => 'form-control','maxlength' => 225,'maxlength' => 225]) !!}
        </div>
    </div>
</div>