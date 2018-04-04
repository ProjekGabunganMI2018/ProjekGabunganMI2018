<table class="table table-responsive" id="JenisSurat-table">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Format Surat</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_jenissurat as $JenisSurat)
        <tr>
            <td>{!! $JenisSurat->nama !!}</td>
            <td>{!! $JenisSurat->format_surat !!}</td>
            <td>{!! $JenisSurat->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['jenis_surat.destroy', $JenisSurat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jenis_surat.show', [$JenisSurat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jenis_surat.edit', [$JenisSurat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Beneran nih mau dihapus?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>