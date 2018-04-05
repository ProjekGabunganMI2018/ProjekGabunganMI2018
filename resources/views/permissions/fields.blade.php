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

<div class="form-group col-sm-12">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('permissions.index') !!}" class="btn btn-default">Cancel</a>
</div>