<div class="table-responsive">
    <table class="table" id="serviceTypes-table">
        <thead>
        <tr>
            <th>Typename</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($serviceTypes as $serviceType)
            <tr>
                <td>{{ $serviceType->TypeName }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['serviceTypes.destroy', $serviceType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('serviceTypes.show', [$serviceType->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <!-- <a href="{{ route('serviceTypes.edit', [$serviceType->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> -->
                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
