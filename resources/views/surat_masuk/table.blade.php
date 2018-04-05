<table class="table table-responsive" id="JenisSurat-table">
    <thead>
    <tr>
        <th>No Surat</th>
        <th>Tanggal</th>
        <th>Perihal</th>
        <th>isi</th>
        <th>Keterangan</th>
        <th>File</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_suratmasuk as $SuratMasuk)
        <tr>
            <td>{!! $SuratMasuk->no_surat !!}</td>
            <td>{!! $SuratMasuk->tanggal !!}</td>
            <td>{!! $SuratMasuk->perihal !!}</td>
            <td>{!! $SuratMasuk->isi !!}</td>
            <td>{!! $SuratMasuk->keterangan !!}</td>
            <td>{!! $SuratMasuk->file !!}</td>
            <td>
                {!! Form::open(['route' => ['surat_masuk.destroy', $SuratMasuk->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('surat_masuk.show', [$SuratMasuk->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('surat_masuk.edit', [$SuratMasuk->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Beneran nih mau dihapus?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>