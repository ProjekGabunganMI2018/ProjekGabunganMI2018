@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Roles
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

                    @include('roles.fields', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection