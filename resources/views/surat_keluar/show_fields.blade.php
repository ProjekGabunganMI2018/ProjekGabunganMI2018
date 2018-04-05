<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $suratkeluar->id !!}</p>
</div>

<!-- Nomer Surat Field -->
<div class="form-group">
    {!! Form::label('nomor_surat', 'Nomor surat:') !!}
    <p>{!! $suratkeluar->nomor_surat !!}</p>
</div>

<!-- Perihal Field -->
<div class="form-group">
    {!! Form::label('perihal', 'Perihal:') !!}
    <p>{!! $suratkeluar->perihal !!}</p>
</div>

<!-- Peminta Surat Field -->
<div class="form-group">
    {!! Form::label('peminta_surat_id', 'Peminta surat:') !!}
    <p>{!! $suratkeluar->peminta_surat_id !!}</p>
</div>

<!-- Pembuat Surat Field -->
<div class="form-group">
    {!! Form::label('pembuat_surat_id', 'Pembuat surat:') !!}
    <p>{!! $suratkeluar-> pembuat_surat_id!!}</p>
</div>

<!-- Surat Masuk Field -->
<div class="form-group">
    {!! Form::label('surat_masuk_id', 'Surat masuk:') !!}
    <p>{!! $suratkeluar->surat_masuk_id !!}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    <p>{!! $suratkeluar->file !!}</p>
</div>

<!-- Keterangan At Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $suratkeluar->keterangan !!}</p>
</div>

<!-- Isi Field -->
<div class="form-group">
    {!! Form::label('isi', 'Isi:') !!}
    <p>{!! $suratkeluar->isi !!}</p>
</div>

<div class="form-group">
    {!! Form::label('create_at', 'Create At:') !!}
    <p>{!! $suratkeluar->create_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('update_at', 'Update At:') !!}
    <p>{!! $suratkeluar->update_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('detele_at', 'Delete At:') !!}
    <p>{!! $suratkeluar->detele_at !!}</p>
</div>

