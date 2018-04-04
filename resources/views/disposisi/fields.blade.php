<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surat_masuk_id', 'Surat Masuk :') !!}
    {!! Form::text('surat_masuk_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pembuat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pembuat_disposisi_id', 'Pembuat Disposisi :') !!}
    {!! Form::textarea('pembuat_disposisi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Penerima Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penerima_disposisi_id', 'Penerima Disposisi :') !!}
    {!! Form::textarea('penerima_disposisi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Asal Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('asal_disposisi_id', 'Asal Disposisi :') !!}
    {!! Form::textarea('asal_disposisi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('disposisi.index') !!}" class="btn btn-default">Cancel</a>
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