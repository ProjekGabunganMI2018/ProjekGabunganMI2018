<table class="table table-responsive" id="surat_keluar-table">
    <thead>
    <tr>
        <th>Nomor surat</th>
        <th>Perihal</th>
        <th>Jenis surat</th>
        <th>Peminta surat</th>
        <th>Pembuat surat</th>
        <th>Surat masuk</th>
        <th>File</th>
        <th>Keterangan</th>
        <th>Isi</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_suratkeluar as $SuratKeluar)
        <tr>
            <td>{!! $SuratKeluar->nomor_surat !!}</td>
            <td>{!! $SuratKeluar->perihal !!}</td>
            <td>{!! $SuratKeluar->jenis_surat_id !!}</td>
            <td>{!! $SuratKeluar->peminta_surat_id !!}</td>
            <td>{!! $SuratKeluar->pembuat_surat_id !!}</td>
            <td>{!! $SuratKeluar->surat_masuk_id !!}</td>
            <td>{!! $SuratKeluar->file !!}</td>
            <td>{!! $SuratKeluar->keterangan !!}</td>
            <td>{!! $SuratKeluar->isi !!}</td>
            <td>
                {!! Form::open(['route' => ['surat_keluar.destroy', $SuratKeluar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('surat_keluar.show', [$SuratKeluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('surat_keluar.edit', [$SuratKeluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Beneran nih mau dihapus?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>