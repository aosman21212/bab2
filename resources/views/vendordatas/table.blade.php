<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <div class="userDatatable-title">
                        Client Services                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Invoice no
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Invoice amount
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Invoice month
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Year
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Date
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Added By
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Action
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendordatas as $vendordata)
                <tr>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendordata->productserviceid->productServiceName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendordata->invoiceNo }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendordata->invoiceAmount }}
                        </div>
                    </td>
                    <td>
    <div class="userDatatable-content">
        {{ \Carbon\Carbon::parse($vendordata->invoiceMonth)->format('F') }}
    </div>
</td>

                    <td>
                        <div class="userDatatable-content">
                            {{ $vendordata->invoiceYear }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendordata->invoiceDate->format('Y-m-d') }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendordata->addedby->name }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                <li>
                                    <a href="{{ route('vendordatas.show', [$vendordata->id]) }}" class="view">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('vendordatas.edit', [$vendordata->id]) }}" class="edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="remove-btn" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $vendordata->id }}').submit();">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <form action="{{ route('vendordatas.destroy', [$vendordata->id]) }}" method="POST" id="delete-form-{{ $vendordata->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-30">
        <div class="pagination-total-text">1-{{ count($vendordatas) }} of {{ count($vendordatas) }} items</div>
        <div>
            {{ $vendordatas->links() }}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.remove-btn').click(function() {
            var vendorId = $(this).data('id');
            if (confirm('Are you sure you want to delete this vendor?')) {
                $.ajax({
                    url: '{{ url('vendordatas') }}/' + vendorId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(result) {
                        // Refresh page or update UI as needed
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status == 409) {
                            var errorMessage = 'Illuminate\\Database\\QueryException\n' +
                                'SQLSTATE[23000]: Integrity constraint violation: 1451 ' +
                                'Cannot delete or update a parent row: a foreign key constraint fails (`oopss`.`product_services`, ' +
                                'CONSTRAINT `product_services_vendorid_foreign` FOREIGN KEY (`vendorId`) REFERENCES `vendors` (`id`)) ' +
                                '(SQL: delete from `vendordatas` where `id` = ' + vendorId + ')';
                            alert(errorMessage);
                        } else {
                            alert('An error occurred while deleting the vendor.');
                        }
                    }
                });
            }
        });
    });
</script>
