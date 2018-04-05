<table class="table table-responsive" id="rekomendasis-table">
    <thead>
        <th>ID</th>
        <th> Name </th>
        <th> Display Name </th>
        <th> Description </th>
        <th colspan="3">Actions</th>
    </thead>
    <tbody>
    @foreach($permissions as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->display_name }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="{{ url('/permissions/' . $item->id) }}" class="btn btn-success btn-xs" title="View permission"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                <a href="{{ url('/permissions/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit permission"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['/permissions', $item->id],
                    'style' => 'display:inline'
                ]) !!}
                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete permission" />', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete permission',
                        'onclick'=>'return confirm("Confirm delete?")'
                )) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>