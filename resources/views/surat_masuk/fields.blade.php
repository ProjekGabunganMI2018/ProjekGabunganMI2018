<!-- No Surat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_surat', 'No Surat :') !!}
    {!! Form::text('no_surat', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-12 col-lg-2">
    {!! Form::label('tanggal', 'Tanggal :') !!}
    {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
</div>

<!-- Perihal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perihal', 'Perihal :') !!}
    {!! Form::text('perihal', null, ['class' => 'form-control']) !!}
</div>

<!-- keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- isi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isi', 'Isi :') !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
</div>

<!-- file Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File :') !!}
    {!! Form::file('file', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('surat_masuk.index') !!}" class="btn btn-default">Cancel</a>
</div>