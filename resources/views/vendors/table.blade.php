<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <div class="userDatatable-title">
                            Name
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Logo
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Added By
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Status
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
                @foreach($vendors as $vendor)
                <tr>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendor->vendorName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <img src="{{ asset('storage/' . $vendor->vendorLogo) }}" alt="Vendor Logo" class="img-thumbnail" style="max-width: 80px; max-height: 40px;">
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendor->addedby->name }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <span class="order-bg-opacity-success text-success rounded-pill active">{{ $vendor->vendorStatus }}</span>
                        </div>
                    </td>
                    <td>
    <div class="userDatatable-content">
        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
            <li><a href="{{ route('vendors.show', [$vendor->id]) }}" class="view"><i class="fas fa-eye"></i></a></li>
            <li><a href="{{ route('vendors.edit', [$vendor->id]) }}" class="edit"><i class="fas fa-edit"></i></a></li>
            <li>
                @if ($vendor->productServices->isNotEmpty())
                @else
                    <a href="#" class="remove-btn" onclick="event.preventDefault(); if(confirm('Are you sure?')) { document.getElementById('delete-form-{{ $vendor->id }}').submit(); }"><i class="fas fa-trash-alt"></i></a>
                    <form action="{{ route('vendors.destroy', [$vendor->id]) }}" method="POST" id="delete-form-{{ $vendor->id }}" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                @endif
            </li>
        </ul>
    </div>
</td>


                    <!-- <td>
    <div class="userDatatable-content">
        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
            <li><a href="{{ route('vendors.show', [$vendor->id]) }}" class="view"><i class="fas fa-eye"></i></a></li>
            <li><a href="{{ route('vendors.edit', [$vendor->id]) }}" class="edit"><i class="fas fa-edit"></i></a></li>
            <li>
                @if ($vendor->productServices->isNotEmpty())
                    <span class="remove-btn"><i class="fas fa-trash-alt"></i></span>
                    <span class="text-danger ml-1" style="font-size: 10px;">Cannot delete</span>
                @else
                    <a href="#" class="remove-btn" data-id="{{ $vendor->id }}"><i class="fas fa-trash-alt"></i></a>
                    <form action="{{ route('vendors.destroy', [$vendor->id]) }}" method="POST" id="delete-form-{{ $vendor->id }}" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                @endif
            </li> -->
        </ul>
    </div>
</td>

                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-30">
        <div class="pagination-total-text">1-{{ count($vendors) }} of {{ count($vendors) }} items</div>
        <div>{{ $vendors->links() }}</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.remove-btn').click(function() {
            var vendorId = $(this).data('id');
            if (confirm('Are you sure you want to delete this vendor?')) {
                $.ajax({
                    url: '{{ url('vendors') }}/' + vendorId,
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
                                '(SQL: delete from `vendors` where `id` = ' + vendorId + ')';
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
