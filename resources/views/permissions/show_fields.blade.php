
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $permission->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $permission->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('display_name', 'Display Name:') !!}
    <p>{!! $permission->display_name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('description', 'Deskripsi:') !!}
    <p>{!! $permission->description !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $permission->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $permission->deleted_at !!}</p>
</div>

