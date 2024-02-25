<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <div class="userDatatable-title">
                            Client Name
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Contact Name
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Mobile No
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Order Date
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Start Date
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
                @foreach($clients as $client)
                <tr>
                    <td>
                        <div class="userDatatable-content">
                            {{ $client->clientName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $client->contactName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $client->mobileNo }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $client->orderDate->format('Y-m-d') }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $client->startDate->format('Y-m-d') }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <span class="order-bg-opacity-success text-success rounded-pill active">{{ $client->clientStatus }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                <li>
                                    <a href="{{ route('clients.show', [$client->id]) }}" class="view">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('clients.edit', [$client->id]) }}" class="edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    @if ($client->productServices->isNotEmpty())
                                        <!-- <span class="remove-btn disabled"><i class="fas fa-trash-alt"></i></span>
                                        <span class="text-danger ml-1">Cannot delete</span> -->
                                    @else
                                        <a href="#" class="remove-btn" data-id="{{ $client->id }}"><i class="fas fa-trash-alt"></i></a>
                                        <form action="{{ route('clients.destroy', [$client->id]) }}" method="POST" id="delete-form-{{ $client->id }}" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
        <div class="pagination-total-text">1-{{ count($clients) }} of {{ count($clients) }} items</div>
        <div>{{ $clients->links() }}</div>
    </div>
</div>
