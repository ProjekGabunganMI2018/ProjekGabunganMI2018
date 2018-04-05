@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                    {!! Form::model($user_role, [
                            'method' => 'PATCH',
                            'url' => ['/user_role', $user_role->id],
                            'files' => true
                        ]) !!}

                    @include ('user_role.fields', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @endsection