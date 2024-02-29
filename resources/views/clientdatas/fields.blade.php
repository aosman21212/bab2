<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('year', 'Year:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::selectRange('year', date('Y'), date('Y') + 10, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('clientId', 'Client name:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::select('clientId', $clients->pluck('clientName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients', 'onchange' => 'fetchProductServices()']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('productServiceId', 'Client Services :') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::select('productServiceId', [], null, ['class' => 'form-control', 'placeholder' => 'Select Client Services', 'id' => 'productServiceId', 'onchange' => 'fetchInitiatedQuantity()']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('initiatedQuantity', 'Initiated Quantity:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('initiatedQuantity', null, ['class' => 'form-control', 'id' => 'initiatedQuantity']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('additionalFees', 'Additional Fees:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('additionalFees', null, ['class' => 'form-control', 'step' => 'any', 'id' => 'additionalFees', 'oninput' => 'calculateAdditionalCost()']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('month', 'Month:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::select('month', ['1' => 'January', '2' => 'February', '3' => 'March', '4' => 'April', '5' => 'May', '6' => 'June', '7' => 'July', '8' => 'August', '9' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('quantity', 'Quantity:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('quantity', null, ['class' => 'form-control', 'id' => 'quantity', 'oninput' => 'calculateAdditionalQuantity()']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('additionalQuantity', 'Additional Quantity:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('additionalQuantity', null, ['class' => 'form-control', 'readonly' => 'readonly', 'id' => 'additionalQuantity', 'oninput' => 'calculateAdditionalCost()']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('additionalCost', 'Additional Cost:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('additionalCost', null, ['class' => 'form-control', 'readonly' => 'readonly', 'id' => 'additionalCost']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('totalMonthlyDue', 'Total Monthly Due:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('totalMonthlyDue', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('outstandingBalance', 'Outstanding Balance:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::text('outstandingBalance', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-3 d-flex aling-items-center">
        <label for="element-text4" class="col-form-label color-dark fs-14 fw-500 align-center">
            {!! Form::label('totalDue', 'Total Due:') !!}
        </label>
    </div>
    <div class="col-sm-9">
        {!! Form::number('totalDue', null, ['class' => 'form-control', 'step' => 'any']) !!}
    </div>
</div>

<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('addedBy', 'Added by:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function fetchProductServices() {
        var selectedClientId = document.getElementById('clientId').value;

        // Fetch product services based on the selected clientId
        var productServicesData = {!! json_encode($prod->groupBy('clientId')->map(function ($item) {
            return $item->pluck('productServiceName', 'id', 'ServiceTypeId');
        })) !!};

        var productServices = productServicesData[selectedClientId] || {};

        var selectProductService = document.getElementById('productServiceId');
        selectProductService.innerHTML = ''; // Clear existing options

        // Add new options based on the selected clientId
        for (var id in productServices) {
            var option = document.createElement('option');
            option.value = id;
            option.textContent = productServices[id];
            selectProductService.appendChild(option);
            // Also set data-service-type-id attribute for each option
            option.setAttribute('data-service-type-id', productServices[id].ServiceTypeId);
        }

        // Trigger change event on productServiceId to fetch initiatedQuantity and additionalFees
        selectProductService.dispatchEvent(new Event('change'));
    }

    function fetchInitiatedQuantity() {
        var selectedClientId = document.getElementById('clientId').value;
        var selectedProductId = document.getElementById('productServiceId').value;

        // Fetch initiatedQuantity and additionalFees based on selected clientId and productServiceId
        var productServiceData = {!! json_encode($prod->groupBy('clientId')->map(function ($item) {
            return $item->pluck('initiatedQuantity', 'id');
        })) !!};

        var initiatedQuantity = productServiceData[selectedClientId][selectedProductId] || 0;

        var additionalFeesData = {!! json_encode($prod->groupBy('clientId')->map(function ($item) {
            return $item->pluck('additionalFees', 'id');
        })) !!};

        var additionalFees = additionalFeesData[selectedClientId][selectedProductId] || 0;

        // Set the fetched initiatedQuantity and additionalFees to the respective fields
        document.getElementById('initiatedQuantity').value = initiatedQuantity;
        document.getElementById('additionalFees').value = additionalFees;

        // Calculate AdditionalQuantity when initiatedQuantity and quantity change
        calculateAdditionalQuantity();
    }

    function calculateAdditionalQuantity() {
        var quantity = parseFloat(document.getElementById('quantity').value);
        var initiatedQuantity = parseFloat(document.getElementById('initiatedQuantity').value);
        var serviceTypeId = parseInt(document.getElementById('productServiceId').getAttribute('data-service-type-id'));

        var additionalQuantity = 0;

        if (serviceTypeId === 1) {
            additionalQuantity = (quantity > initiatedQuantity) ? Math.ceil((quantity - initiatedQuantity) / 1000) : 0;
        } else {
            additionalQuantity = (quantity > initiatedQuantity) ? (quantity - initiatedQuantity) : 0;
        }

        document.getElementById('additionalQuantity').value = additionalQuantity;
                // Calculate AdditionalCost when AdditionalQuantity or AdditionalFees changes


        // Calculate AdditionalCost when AdditionalQuantity or AdditionalFees changes
        calculateAdditionalCost();

        // Set TotalMonthlyDue equal to AdditionalCost
        document.getElementById('totalMonthlyDue').value = document.getElementById('additionalCost').value;

        // Calculate TotalDue whenever totalMonthlyDue changes
        calculateTotalDue();
    }

    function calculateAdditionalCost() {
        var additionalQuantity = parseFloat(document.getElementById('additionalQuantity').value);
        var additionalFees = parseFloat(document.getElementById('additionalFees').value);

        var additionalCost = isNaN(additionalQuantity) || isNaN(additionalFees) ? 0 : additionalQuantity * additionalFees;

        document.getElementById('additionalCost').value = additionalCost;
    }

    function calculateTotalDue() {
        var totalMonthlyDue = parseFloat(document.getElementById('totalMonthlyDue').value) || 0;
        var outstandingBalance = parseFloat(document.getElementById('outstandingBalance').value) || 0;

        var totalDue = totalMonthlyDue - outstandingBalance;

        document.getElementById('totalDue').value = totalDue;
    }

    // Fetch the initiatedQuantity when the page loads
    window.onload = function() {
        fetchInitiatedQuantity();
        fetchProductServices(); // Populate productServiceId dropdown based on selected clientId
    };
</script>
