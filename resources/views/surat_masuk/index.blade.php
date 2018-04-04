@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Surat Masuk</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('surat_masuk.create') !!}">Tambah</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('surat_masuk.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

