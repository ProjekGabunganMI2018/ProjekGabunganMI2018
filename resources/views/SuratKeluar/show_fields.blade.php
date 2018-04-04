<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $suratkeluar->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nomor_surat', 'Nomor surat:') !!}
    <p>{!! $suratkeluar->nomor_surat !!}</p>
</div>

<!-- Instansi Field -->
<div class="form-group">
    {!! Form::label('perihal', 'Perihal:') !!}
    <p>{!! $suratkeluar->perihal !!}</p>
</div>

<!-- Kontak Field -->
<div class="form-group">
    {!! Form::label('isi', 'Isi:') !!}
    <p>{!! $suratkeluar->isi !!}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('peminta_surat', 'Peminta surat:') !!}
    <p>{!! $suratkeluar->peminta_surat !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('pembuat_surat', 'Pembuat surat:') !!}
    <p>{!! $suratkeluar-> pembuat_surat!!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('surat_masuk', 'Surat masuk:') !!}
    <p>{!! $suratkeluar->surat_masuk !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    <p>{!! $suratkeluar->file !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $suratkeluar->keterangan !!}</p>
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

