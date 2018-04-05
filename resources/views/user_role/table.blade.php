<table class="table table-responsive" id="rekomendasis-table">
    <thead>

    <th>ID</th><th> Nama Pengguna </th><th> Role User </th>
        <th colspan="3">Actions</th>

    </thead>
    <tbody>
    @foreach($user_role as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                @foreach($item->roles as $role)
                    {{$role->display_name . ','}}
                @endforeach
            </td>
            <td>
                <a href="{{ url('/user_role/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit user_role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>