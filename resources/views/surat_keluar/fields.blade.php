<!-- No Surat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomer_surat', 'Nomer Surat :') !!}
    {!! Form::text('nomer_surat', null, ['class' => 'form-control']) !!}
</div>

<!-- Perihal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perihal', 'Perihal :') !!}
    {!! Form::text('perihal', null, ['class' => 'form-control']) !!}
</div>

<!-- Isi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi', 'Isi :') !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
</div>

<!-- jenis surat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('jenis_surat_id', 'Jenis Surat :') !!}
    {!! Form::textarea('jenis_surat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- peminta surat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('peminta_surat_id', 'Peminta Surat :') !!}
    {!! Form::textarea('peminta_surat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- pembuat surat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pembuat_surat_id', 'Pembuat Surat :') !!}
    {!! Form::textarea('pembuat_surat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- surat masuk Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('surat_masuk_id', 'Surat Masuk :') !!}
    {!! Form::textarea('surat_masuk_id', null, ['class' => 'form-control']) !!}
</div>

<!-- file Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('file', 'File :') !!}
    {!! Form::textarea('file', null, ['class' => 'form-control']) !!}
</div>

<!-- keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
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

    CKEDITOR.replace( 'format_surat',options );
</script>