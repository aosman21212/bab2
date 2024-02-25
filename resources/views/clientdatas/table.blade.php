
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
                                        Client name
                                    </div>
                                </th>
                                <th>
                                    <div class="userDatatable-title">
                                        Quantity
                                    </div>
                                </th>
                                <th>
                                    <div class="userDatatable-title">
                                        Total monthly due
                                    </div>
                                </th>
                                <th>
                                    <div class="userDatatable-title">
                                        Outstanding balance
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
                            @foreach($clientdatas as $clientdata)
                            <tr>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $clientdata->productserviceid->productServiceName }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $clientdata->clientid->clientName }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $clientdata->quantity }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $clientdata->totalMonthlyDue }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        {{ $clientdata->outstandingBalance }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content">
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="{{ route('clientdatas.show', [$clientdata->id]) }}" class="view">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('clientdatas.edit', [$clientdata->id]) }}" class="edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $clientdata->id }}').submit();">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form action="{{ route('clientdatas.destroy', [$clientdata->id]) }}" method="POST" id="delete-form-{{ $clientdata->id }}" style="display: none;">
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
        <div class="pagination-total-text">1-{{ count($clientdatas) }} of {{ count($clientdatas) }} items</div>
        <div>
            {{ $clientdatas->links() }}
        </div>
    </div>
            </div>
        </div>