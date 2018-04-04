/**
 * Created by PhpStorm.
 * User: Luis Ismail
 * Date: 04/04/2018
 * Time: 20.35
 */
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Disposisi
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('disposisi.show_fields')
                    <a href="{!! route('disposisi.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
