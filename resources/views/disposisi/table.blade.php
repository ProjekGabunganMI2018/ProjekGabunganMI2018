/**
 * Created by PhpStorm.
 * User: Luis Ismail
 * Date: 04/04/2018
 * Time: 20.36

 */<table class="table table-responsive" id="Disposisi-table">
    <thead>
    <tr>
        <th>Surat Masuk</th>
        <th>Pembuat Disposisi</th>
        <th>Penerima Disposisi</th>
        <th>Asal Disposisi</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
@foreach($list_disposisi as $Disposisi)
    <tr>
        <td>{!! $Disposisi->surat_masuk_id !!}</td>
        <td>{!! $Disposisi->pembuat_disposisi_id !!}</td>
        <td>{!! $Disposisi->penerima_disposisi_id !!}</td>
        <td>{!! $Disposisi->asal_disposisi_id !!}</td>
        <td>{!! $Disposisi->keterangan !!}</td>
        <td>
            {!! Form::open(['route' => ['disposisi.destroy', $Disposisi->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{!! route('disposisi.show', [$Disposisi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{!! route('disposisi.edit', [$Disposisi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Beneran nih mau dihapus?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>