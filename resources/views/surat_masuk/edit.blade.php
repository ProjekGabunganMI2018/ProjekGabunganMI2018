@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Surat Masuk
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($suratmasuk, ['route' => ['surat_masuk.update', $suratmasuk->id], 'method' => 'patch']) !!}

                    @include('surat_masuk.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection