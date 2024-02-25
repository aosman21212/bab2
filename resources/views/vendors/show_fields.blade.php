<table class="table table-bordered">
    <tbody>
        <tr>
            <th>name</th>
            <td>{{ $vendors->vendorName }}</td>
        </tr>
        <tr>
            <th>logo</th>
            <td>
                <img src="{{ asset('storage/' . $vendors->vendorLogo) }}" alt="Vendor Logo" class="img-thumbnail" style="max-width: 80px; max-height: 40px;">
            </td>
        </tr>
        <tr>
            <th>Added by</th>
            <td>{{ $vendors->addedby->name }}</td>
        </tr>
        <tr>
            <th>status</th>
            <td>{{ $vendors->vendorStatus }}</td>
        </tr>
    </tbody>
</table>
