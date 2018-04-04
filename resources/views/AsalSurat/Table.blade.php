<table class="table table-responsive" id="jenisSurats-table">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Format Surat</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jenisSurats as $jenisSurat)
        <tr>
            <td>{!! $jenisSurat->nama !!}</td>
            <td>{!! $jenisSurat->format_surat !!}</td>
            <td>{!! $jenisSurat->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['jenisSurats.destroy', $jenisSurat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jenisSurats.show', [$jenisSurat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jenisSurats.edit', [$jenisSurat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>