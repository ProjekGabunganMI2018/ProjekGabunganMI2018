    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

{!! Form::hidden('id', null, ['class' => 'form-control']) !!}

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nama Pengguna :'.$user_role->name) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('information', 'Pilih role yang anda inginkan pada user di atas') !!}
    </div>
</div>
@foreach($roles as $role)
    <div class="row">
        <div class="form-group">

            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="roles[]" value="{{$role->id}}" {{isset($user_role->roles) && $user_role->roles->count()>0?(in_array($role->id,$arrayRole)?'checked':''):''}}>  {{$role->display_name}}
                    </label>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="row">
<div class="form-group col-sm-12">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('user_role.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
