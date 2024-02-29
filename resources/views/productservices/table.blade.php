<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <div class="userDatatable-title">
                        Client Services

                        </div>
                    </th>
                  
                    <th>
                        <div class="userDatatable-title">
                        Initiated Qty
                                            </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Recurring Fees
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Additional Fees
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Recurring Period
                        </div>
                    </th>
                    <!-- <th>
                        <div class="userDatatable-title">
                            Added By
                        </div>
                    </th> -->
                 
                    <th>
                        <div class="userDatatable-title">
                            Product/Service Status
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
                            {{ $productservice->additionalFees }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->recurringPeriod }}
                        </div>
                    </td>
                    <!-- <td>
                        <div class="userDatatable-content">
                            {{ $productservice->addedBy }}
                        </div>
                    </td> -->
                
                    <td>
                        <div class="userDatatable-content">
                            {{ $productservice->productServiceStatus }}
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
                                <!-- <li>
                                    <a href="{{ route('productservices.edit', [$productservice->id]) }}" class="edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="#" class="remove" onclick="event.preventDefault(); 
                                        if(confirm('Are you sure you want to delete this product/service?')) {
                                            document.getElementById('delete-form-{{ $productservice->id }}').submit();
                                        }">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <form action="{{ route('productservices.destroy', [$productservice->id]) }}" method="POST" id="delete-form-{{ $productservice->id }}" style="display: none;">
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
</div>
