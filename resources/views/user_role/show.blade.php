@extends('layouts.app')

@section('content')
    <section class="panel panel-warning">
        <header class="panel-heading">
            <h2 class="panel-title">{{isset($title)?$title:''}}</h2>
        </header>
        <div class="panel-body">

{{--                        <a href="{{ url('user_role/' . $user_role->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit user_role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['user_role', $user_role->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete user_role',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}--}}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th class="text-right">ID</th><td>{{ $user_role->id }}</td>
                                    </tr>
                                    <tr><th class="text-right"> User </th><td> {{ $user_role->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

        </div>
    </section>
@endsection