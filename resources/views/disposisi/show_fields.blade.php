<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $disposisi->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('surat_masuk_id', 'Surat Masuk :') !!}
    <p>{!! $disposisi->surat_masuk_id !!}</p>
</div>

<!-- Pembuat Field -->
<div class="form-group">
    {!! Form::label('pembuat_disposisi_id', 'Pembuat Disposisi') !!}
    <p>{!! $disposisi->pembuat_disposisi_id !!}</p>
</div>

<!-- Penerima Field -->
<div class="form-group">
    {!! Form::label('penerima_disposisi_id', 'Penerima Disposisi :') !!}
    <p>{!! $disposisi->penerima_disposisi_id !!}</p>
</div>

<!-- Asal Field -->
<div class="form-group">
    {!! Form::label('asal_disposisi_id', 'Asal Disposisi :') !!}
    <p>{!! $disposisi->asal_disposisi_id !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $disposisi->keterangan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $disposisi->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $disposisi->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $disposisi->deleted_at !!}</p>
</div>

