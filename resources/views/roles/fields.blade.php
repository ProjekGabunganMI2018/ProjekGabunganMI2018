<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name :') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('display_name', 'Display Name:') !!}
    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

@foreach($permissions as $permission)
<div class="form-group col-sm-6">
    {!! Form::label('permissions', $permission->display_name) !!}
    <div class="col-md-6 switch switch-sm switch-primary ">
        <input type="checkbox" name="permissions[]" value="{{$permission->id}}" data-plugin-ios-switch class="form-control"  {{isset($role)?in_array($permission->id,$arrayPermission)?'checked':'':''}}/>
    </div>
</div>
@endforeach

<div class="form-group col-sm-12">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('roles.index') !!}" class="btn btn-default">Cancel</a>
</div>