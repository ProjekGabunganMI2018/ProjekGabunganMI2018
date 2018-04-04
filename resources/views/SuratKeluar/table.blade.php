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
    @foreach($list_asalsurat as $skeluar)
        <tr>
            <td>{!! $skeluar->nomor_surat !!}</td>
            <td>{!! $skeluar->perihal !!}</td>
            <td>{!! $skeluar->isi !!}</td>
            <td>{!! $skeluar->jenis_surat !!}</td>
            <td>{!! $skeluar->peminta_surat !!}</td>
            <td>{!! $skeluar->pembuat_surat !!}</td>
            <td>{!! $skeluar->surat_masuk !!}</td>
            <td>{!! $skeluar->file !!}</td>
            <td>{!! $skeluar->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['Suratkeluar.destroy', $surat_keluar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('Suratkeluar.show', [$surat_keluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('Suratkeluar.edit', [$surat_keluar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Beneran nih mau dihapus?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>