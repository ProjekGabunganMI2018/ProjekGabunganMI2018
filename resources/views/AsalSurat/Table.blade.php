<table class="table table-responsive" id="AsalSurat-table">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Instansi</th>
        <th>Kontak</th>
        <th>Alamat</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($AsalSurat as $asalSurat)
        <tr>
            <td>{!! $AsalSurat->nama !!}</td>
            <td>{!! $AsalSurat->instansi !!}</td>
            <td>{!! $AsalSurat->kontak !!}</td>
            <td>{!! $AsalSurat->alamat !!}</td>
            <td>{!! $AsalSurat->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['$asalSurat.destroy', $asalSurat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('$asalSurat.show', [$asalSurat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('$asalSurat.edit', [$asalSurat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>