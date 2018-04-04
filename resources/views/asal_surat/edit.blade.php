@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asal Surat
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($asalsurat, ['route' => ['asal_surat.update', $asalsurat->id], 'method' => 'patch']) !!}

                    @include('asal_surat.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection