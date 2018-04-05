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
                    {!! Form::model($asalsurat, ['route' => ['suratkeluar.update', $suratkeluar->id], 'method' => 'patch']) !!}

                    @include('surat_keluar.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('select#jenis_surat_id').change(function () {

            var jenis_surat_id = this.value;
            var url= "{{url("format_jenis_surat")}}"+"/"+jenis_surat_id;
            $.get(url,
                function(myObject){
                    $('textarea#isi').val(myObject);
                    CKEDITOR.instances["isi"].document.$.body.innerHTML=myObject;
                });
        });
    </script>
@endsection