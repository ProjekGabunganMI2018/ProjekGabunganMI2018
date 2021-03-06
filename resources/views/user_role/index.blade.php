@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">User-Roles</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('user_role.table')
            </div>
        </div>
    </div>
@endsection