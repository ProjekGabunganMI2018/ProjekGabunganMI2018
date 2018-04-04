@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenis Surat
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($jenisSurat, ['route' => ['jenisSurats.update', $jenisSurat->id], 'method' => 'patch']) !!}

                    @include('jenis_surats.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection