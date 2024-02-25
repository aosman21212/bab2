<table class="table table-bordered">
    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerName', 'Name:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerName }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerContact', 'contact:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerContact }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerEmail', 'email:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerEmail }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerStatus', 'status:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerStatus }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('addedBy', 'Added by:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->addedby->name }}</p>
        </td>
    </tr>
</table>
