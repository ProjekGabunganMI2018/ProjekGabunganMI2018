
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $role->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $role->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('display_name', 'Display Name:') !!}
    <p>{!! $role->display_name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('permission', 'Permission:') !!}
    <p>
        @foreach($role->perms as $perm)
            {{$perm->display_name.','}}
        @endforeach
    </p>
</div>

<div class="form-group">
    {!! Form::label('description', 'Deskripsi:') !!}
    <p>{!! $role->description !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $role->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $role->deleted_at !!}</p>
</div>

