<table class="table table-responsive" id="surat_keluar-table">
    <thead>
    <tr>
        <th>Nomor surat</th>
        <th>Perihal</th>
        <th>Isi</th>
        <th>Jenis surat</th>
        <th>Peminta surat</th>
        <th>Pembuat surat</th>
        <th>Surat masuk</th>
        <th>File</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_suratkeluar as $surat_keluar)
        <tr>
            <td>{!! $surat_keluar->nomor_surat !!}</td>
            <td>{!! $surat_keluar->perihal !!}</td>
            <td>{!! $surat_keluar->isi !!}</td>
            <td>{!! $surat_keluar->jenis_surat_id !!}</td>
            <td>{!! $surat_keluar->peminta_surat_id !!}</td>
            <td>{!! $surat_keluar->pembuat_surat_id !!}</td>
            <td>{!! $surat_keluar->surat_masuk_id !!}</td>
            <td>{!! $surat_keluar->file !!}</td>
            <td>{!! $surat_keluar->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['surat_keluar.destroy', $surat_keluar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('surat_keluar.show', [$surat_keluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('surat_keluar.edit', [$surat_keluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Beneran nih mau dihapus?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>