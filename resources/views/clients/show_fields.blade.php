<table class="table table-bordered">
    <tbody>
        <tr>
            <th>{!! Form::label('clientName', 'Clientname:') !!}</th>
            <td>{{ $clients->clientName }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('clientLogo', 'Clientlogo:') !!}</th>
            <td><img src="{{ asset('storage/' . $clients->clientLogo) }}" alt="clientLogo Logo" style="width: 100px; height: auto;">

</td>
        </tr>

        <tr>
            <th>{!! Form::label('contactName', 'Contactname:') !!}</th>
            <td>{{ $clients->contactName }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('mobileNo', 'Mobileno:') !!}</th>
            <td>{{ $clients->mobileNo }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('email', 'Email:') !!}</th>
            <td>{{ $clients->email }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('babAcctManagerId', 'AcctManagerName:') !!}</th>
            <td>{{ $clients->babAcctManager->AcctManagerName }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('order Date', 'Orderdate:') !!}</th>
            <td>{{ $clients->orderDate->format('Y-m-d') }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('start Date', 'Startdate:') !!}</th>
            <td>{{ $clients->startDate->format('Y-m-d') }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('bill_to', 'Bill To:') !!}</th>
            <td>{{ $clients->bill_to }}</td>
        </tr>

        <tr>
            <th>{!! Form::label('addedBy', 'Addedby:') !!}</th>
            <td>{{  $clients->addedby->name }}</td>
        </tr>

     

        <tr>
            <th>{!! Form::label('clientStatus', 'Clientstatus:') !!}</th>
            <td>{{ $clients->clientStatus }}</td>
        </tr>
    </tbody>
</table>
