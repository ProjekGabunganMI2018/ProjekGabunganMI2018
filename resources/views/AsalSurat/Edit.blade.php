@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asal Surat
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($AsalSurat, ['route' => ['asalSurat.update', $jenisSurat->id], 'method' => 'patch']) !!}

                    @include('asal_suraat.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection