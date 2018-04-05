<table class="table table-responsive" id="rekomendasis-table">
    <thead>

        <th> Name </th>
        <th> Display Name </th>
        <th> Permissions </th>
        <th> Description </th>
        <th colspan="3">Actions</th>

    </thead>
    <tbody>
    @foreach($roles as $item)
        <tr>
            <td>{{ $item->name }}</td><td>{{ $item->display_name }}</td>
            <td>
                @foreach($item->perms as $perm)
                    {{$perm->display_name.','}}
                @endforeach
            </td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="{{ url('/roles/' . $item->id) }}" class="btn btn-success btn-xs" title="View role"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                <a href="{{ url('/roles/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                {!! Form::open(['route' => ['roles.destroy', $item->id], 'method' => 'delete','style' => 'display:inline']) !!}
                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete role" />', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete role',
                        'onclick'=>'return confirm("Confirm delete?")'
                )) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>