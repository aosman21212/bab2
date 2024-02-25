<table class="table table-bordered">
    <!-- Productserviceid Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('productServiceId', 'Client Services:') !!}
        </td>
        <td>
            <p>{{ $clientdata->productserviceid->productServiceName }}</p>
        </td>
    </tr>

    <!-- Clientid Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('clientId', 'Clien Name:') !!}
        </td>
        <td>
            <p>{{ $clientdata->clientid->clientName }}</p>
        </td>
    </tr>

    <!-- Month Field -->
    <tr>
    <td class="col-sm-12">
        {!! Form::label('month', 'Month:') !!}
    </td>
    <td>
        <p>{{ date('F', strtotime($clientdata->month)) }}</p>
    </td>
</tr>

    <!-- Year Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('year', 'Year:') !!}
        </td>
        <td>
            <p>{{ $clientdata->year }}</p>
        </td>
    </tr>

    <!-- Quantity Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('quantity', 'Quantity:') !!}
        </td>
        <td>
            <p>{{ $clientdata->quantity }}</p>
        </td>
    </tr>

    <!-- Additionalquantity Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('additionalQuantity', 'Additional quantity:') !!}
        </td>
        <td>
            <p>{{ $clientdata->additionalQuantity }}</p>
        </td>
    </tr>

    <!-- Additionalcost Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('additionalCost', 'Additional cost:') !!}
        </td>
        <td>
            <p>{{ $clientdata->additionalCost }}</p>
        </td>
    </tr>

    <!-- Totalmonthlydue Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('totalMonthlyDue', 'Total monthly due:') !!}
        </td>
        <td>
            <p>{{ $clientdata->totalMonthlyDue }}</p>
        </td>
    </tr>

    <!-- Outstandingbalance Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('outstandingBalance', 'Outstanding balance:') !!}
        </td>
        <td>
            <p>{{ $clientdata->outstandingBalance }}</p>
        </td>
    </tr>

    <!-- Totaldue Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('totalDue', 'Total due:') !!}
        </td>
        <td>
            <p>{{ $clientdata->totalDue }}</p>
        </td>
    </tr>

    <!-- Addedby Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('addedBy', 'Addedby:') !!}
        </td>
        <td>
            <p>{{ $clientdata->addedby->name }}</p>
        </td>
    </tr>

    <!-- Updatedby Field -->
    <!-- <tr>
        <td class="col-sm-12">
            {!! Form::label('updatedBy', 'Updatedby:') !!}
        </td>
        <td>
            <p>{{ $clientdata->updatedBy }}</p>
        </td>
    </tr> -->
</table>
