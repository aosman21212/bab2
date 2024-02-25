



<div class="form-group row">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label for="element-text4" class=" col-form-label color-dark fs-14 fw-500 align-center">        {!! Form::label('vendorName', 'Name:') !!}

</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input type="text" name="vendorName" class="form-control form-control-lg" maxlength="255" placeholder="Duran Clayton" value="{{ old('vendorName', isset($vendors) ? $vendors->vendorName : '') }}">
                                                        </div>
                                                    </div>
                                                    


<div class="form-group row">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label for="element-text4" class=" col-form-label color-dark fs-14 fw-500 align-center">        {!! Form::label('vendorLogo', 'Logo:') !!}

</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        @if(isset($vendors) && isset($vendors->vendorLogo))
        <img src="{{ asset('storage/' . $vendors->vendorLogo) }}" alt="Vendor Logo" style="max-width: 56px;">
        <br>
    @endif
    <input type="file" name="vendorLogo" class="form-control form-control-lg">                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label for="element-text4" class=" col-form-label color-dark fs-14 fw-500 align-center">        {!! Form::label('vendorStatus', 'Status:') !!}

</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <select name="vendorStatus" class="form-control form-control-lg">
        <option value="Active" {{ old('vendorStatus', isset($vendors) && $vendors->vendorStatus == 'Active' ? 'selected' : '') }}>Active</option>
        <option value="Inactive" {{ old('vendorStatus', isset($vendors) && $vendors->vendorStatus == 'Inactive' ? 'selected' : '') }}>Inactive</option>
    </select>                                                        </div>
                                                    </div>






<!-- Hidden Added By Field -->
<div  class="form-group mb-25"style="display: none;">
    <label for="addedBy">Added By:</label>
    <input type="number" name="addedBy" class="form-control form-control-lg" readonly value="{{ auth()->id() }}">
</div>


