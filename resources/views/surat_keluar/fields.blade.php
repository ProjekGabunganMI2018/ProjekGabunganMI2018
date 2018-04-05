<!-- No Surat Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nomor_surat', 'Nomer Surat :') !!}
    {!! Form::text('nomor_surat', null, ['class' => 'form-control']) !!}
</div>

<!-- Perihal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('perihal', 'Perihal :') !!}
    {!! Form::text('perihal', null, ['class' => 'form-control']) !!}
</div>

<!-- jenis surat Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('jenis_surat', 'Jenis Surat :') !!}
    {!! Form::select('jenis_surat', $jenis_surat ,null, ['class' => 'form-control']) !!}
</div>

<!-- peminta surat Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('peminta_surat', 'Peminta Surat :') !!}
    {!! Form::select('peminta_surat', $user , null, ['class' => 'form-control']) !!}
</div>

<!-- pembuat surat Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('pembuat_surat', 'Pembuat Surat :') !!}
    {!! Form::select('pembuat_surat', $user, null, ['class' => 'form-control']) !!}
</div>

<!-- surat masuk Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('surat_masuk', 'Surat Masuk :') !!}
    {!! Form::text('surat_masuk', null, ['class' => 'form-control']) !!}
</div>

<!-- file Field -->
<div class="form-group col-sm-12 col-lg-2">
    {!! Form::label('file', 'File :') !!}
    {!! Form::file('file', null, ['class' => 'form-control']) !!}
</div>

<!-- keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Isi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi', 'Isi :') !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('surat_keluar.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>

    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace( 'isi',options );
</script>