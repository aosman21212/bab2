<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0" id="clientdatareports-table">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <div class="userDatatable-title">
                        Client Services                       </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Client
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Month
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Year
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Quantity
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Additionalquantity
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Additionalcost
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Totalmonthlydue
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Outstandingbalance
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Totaldue
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Created At
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Updated At
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientdatareports as $clientdatareport)
                <tr>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->productserviceid->productServiceName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->clientid->clientName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                                                      {{ date('F', mktime(0, 0, 0, $clientdatareport->month, 1)) }}

                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->year }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->quantity }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->additionalQuantity }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->additionalCost }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->totalMonthlyDue }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->outstandingBalance }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $clientdatareport->totalDue }}
                        </div>
                    </td>
                    <td>
    <div class="userDatatable-content">
        {{ $clientdatareport->created_at->format('Y-m-d') }}
    </div>
</td>
<td>
    <div class="userDatatable-content">
        {{ $clientdatareport->updated_at->format('Y-m-d') }}
    </div>
</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="d-flex justify-content-between align-items-center mt-30">
        <div class="pagination-total-text">{{ $clientdatareports->firstItem() }}-{{ $clientdatareports->lastItem() }} of {{ $clientdatareports->total() }} items</div>
        <div>
            {{ $clientdatareports->links() }}
        </div>
    </div>
</div>
