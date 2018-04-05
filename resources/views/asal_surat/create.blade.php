@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asal surat
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'asal_surat.store']) !!}

                    @include('asal_surat.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
