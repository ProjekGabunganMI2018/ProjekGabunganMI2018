@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Surat Keluar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'surat_keluar.store']) !!}

                    @include('surat_keluar.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection