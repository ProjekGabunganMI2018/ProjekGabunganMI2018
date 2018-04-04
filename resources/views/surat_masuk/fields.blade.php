<!-- No Surat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_surat', 'No Surat :') !!}
    {!! Form::text('no_surat', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tanggal', 'Tanggal :') !!}
    {!! Form::textarea('tanggal', null, ['class' => 'form-control']) !!}
</div>

<!-- Perihal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perihal', 'Perihal :') !!}
    {!! Form::text('perihal', null, ['class' => 'form-control']) !!}
</div>

<!-- isi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isi', 'Isi :') !!}
    {!! Form::text('isi', null, ['class' => 'form-control']) !!}
</div>

<!-- keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- file Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File :') !!}
    {!! Form::text('file', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('surat_masuk.index') !!}" class="btn btn-default">Cancel</a>
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