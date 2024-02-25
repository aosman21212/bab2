<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th><div class="userDatatable-title">Name</div></th>
                    <th><div class="userDatatable-title">Contact number</div></th>
                    <th><div class="userDatatable-title">Email</div></th>
                    <th><div class="userDatatable-title">Status</div></th>
                    <th><div class="userDatatable-title">Added By</div></th>
                    <th><div class="userDatatable-title">Action</div></th>
                </tr>
            </thead>
            <tbody>
                @foreach($babacctmanagers as $babacctmanager)
                <tr>
                    <td><div class="userDatatable-content">{{ $babacctmanager->AcctManagerName }}</div></td>
                    <td><div class="userDatatable-content">{{ $babacctmanager->AcctManagerContact }}</div></td>
                    <td><div class="userDatatable-content">{{ $babacctmanager->AcctManagerEmail }}</div></td>
                    <td><div class="userDatatable-content"><span class="order-bg-opacity-success text-success rounded-pill active">{{ $babacctmanager->AcctManagerStatus }}</span></div></td>
                    <td><div class="userDatatable-content">{{ $babacctmanager->addedby->name }}</div></td>
                    <td>
                        <div class="userDatatable-content">
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                <li><a href="{{ route('babacctmanagers.show', [$babacctmanager->id]) }}" class="view"><i class="fas fa-eye"></i></a></li>
                                <li><a href="{{ route('babacctmanagers.edit', [$babacctmanager->id]) }}" class="edit"><i class="fas fa-edit"></i></a></li>
                                <li>
                                    <div class="remove-button">
                                        @if ($babacctmanager->hasClients())
                     
                                        @else
                                            <a href="#" class="remove" onclick="event.preventDefault(); if(confirm('Are you sure?')) { document.getElementById('delete-form-{{ $babacctmanager->id }}').submit(); }"><i class="fas fa-trash-alt"></i></a>
                                            {!! Form::open(['route' => ['babacctmanagers.destroy', $babacctmanager->id], 'method' => 'delete', 'id' => 'delete-form-'.$babacctmanager->id, 'style' => 'display:none;']) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::hidden('_token', csrf_token()) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    </div>
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
        <div class="pagination-total-text">1-{{ count($babacctmanagers) }} of {{ $babacctmanagers->total() }} items</div>
        <div>{{ $babacctmanagers->links() }}</div>
    </div>
</div>
