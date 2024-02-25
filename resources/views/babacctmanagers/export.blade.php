<table>
    <thead>
    <tr>
        <th>AcctManagerName</th>
    </tr>
    </thead>
    <tbody>
    @foreach($babacctmanagers as $babacctmanager)
        <tr>
            <td>  {{ $babacctmanager->AcctManagerName }}</td>
        </tr>
    @endforeach
    </tbody>
</table>