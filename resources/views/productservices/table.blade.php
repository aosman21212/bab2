<div class="alert">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>

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
                            Initiated Quantity
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Recurring Fees
                        </div>
                    </th>
                  
                    <th>
                        <div class="userDatatable-title">
                            Recurring Period
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Client Name
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
                @foreach($productservices as $productservice)
                <tr>
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->productServiceName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->initiatedQuantity }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->recurringFees }}
                        </div>
                    </td>
                 
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->recurringPeriod }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->clientid->clientName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <span class="order-bg-opacity-success text-success rounded-pill active">{{ $productservice->productServiceStatus }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                <li>
                                    <a href="{{ route('productservices.show', [$productservice->id]) }}" class="view">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('productservices.edit', [$productservice->id]) }}" class="edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    @if ($productservice->vendorData->isEmpty() && $productservice->clientData->isEmpty())
                                        <a href="#" class="remove" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $productservice->id }}').submit();">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form action="{{ route('productservices.destroy', [$productservice->id]) }}" method="POST" id="delete-form-{{ $productservice->id }}" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @else
                                        <!-- <span class="remove disabled"><i class="fas fa-trash-alt"></i></span>
                                        <span class="text-danger ml-1" style="font-size: 10px;">Cannot delete</span> -->
                                    @endif
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
        <div class="pagination-total-text">1-{{ count($productservices) }} of {{ count($productservices) }} items</div>
        <div>
            {{ $productservices->links() }}
        </div>
    </div>
    
</div>
