@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenis Surat
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'jenis_surat.store']) !!}

                    @include('jenis_surat.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
