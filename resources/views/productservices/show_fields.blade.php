<table class="table table-bordered">
    <tr>
        <td class="col-sm-4">
            {!! Form::label('productServiceName', 'name:') !!}
        </td>
        <td>
            <p>{{ $productservices->productServiceName }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('initiatedQuantity', 'Initiated quantity:') !!}
        </td>
        <td>
            <p>{{ $productservices->initiatedQuantity }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('recurringFees', 'Recurring fees:') !!}
        </td>
        <td>
            <p>{{ $productservices->recurringFees }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('additionalFees', 'Additional fees:') !!}
        </td>
        <td>
            <p>{{ $productservices->additionalFees }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('recurringPeriod', 'Recurring period:') !!}
        </td>
        <td>
            <p>{{ $productservices->recurringPeriod }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('addedBy', 'Addedby:') !!}
        </td>
        <td>
            <p>{{ $productservices->addedby->name }}</p>
        </td>
    </tr>

  

    <tr>
        <td class="col-sm-4">
            {!! Form::label('clientId', 'Client anme:') !!}
        </td>
        <td>
            <p>{{  $productservices->clientid->clientName }}</p>
        </td>
    </tr>
    <tr>
        <td class="col-sm-4">
            {!! Form::label('vendorId', 'Vendor name :') !!}
        </td>
        <td>
            <p>{{ $productservices->vendorid->vendorName }}</p>
        </td>
    </tr>
    <tr>
        <td class="col-sm-4">
            {!! Form::label('productServiceStatus', 'status:') !!}
        </td>
        <td>
            <p>{{ $productservices->productServiceStatus }}</p>
        </td>
    </tr>

    
</table>
