<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $jenisSurat->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $jenisSurat->nama !!}</p>
</div>

<!-- Format Surat Field -->
<div class="form-group">
    {!! Form::label('format_surat', 'Format Surat:') !!}
    <p>{!! $jenisSurat->format_surat !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $jenisSurat->keterangan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $jenisSurat->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $jenisSurat->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $jenisSurat->deleted_at !!}</p>
</div>

