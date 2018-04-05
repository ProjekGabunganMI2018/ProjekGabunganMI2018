<table class="table table-responsive" id="users-table">
    <thead>
        <th>Nama</th>
        <th>Email</th>
        <th>NIK</th>
        <th>NPWP Pribadi</th>
        <th>Tempat Tanggal Lahir</th>
        <th>JenKel</th>
        <th>Kewarganegaraan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->biodata->nik or '' !!}</td>
            <td>{!! $user->biodata->npwp_pribadi or '' !!}</td>
            <td>{!! isset($user->biodata->tempat_lahir)?$user->biodata->tempat_lahir.",":'' or '' !!} {!! $user->biodata->tanggal_lahir or '' !!}</td>
            <td>{!! $user->biodata->jenis_kelamin or '' !!}</td>
            <td>{!! $user->biodata->kewarganegaraan or '' !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>