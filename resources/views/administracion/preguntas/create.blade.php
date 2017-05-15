@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Preguntas<small>Agregar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Contenidos</li>
            <li class="active">Agregar</li>
        </ol>
    </section>
@endsection
@section('contenido')
    @if (session('mensaje-registro'))
        @include('mensajes.msj_correcto')
    @endif
    @if(!$errors->isEmpty())
        <div class="alert alert-danger">
            <p><strong>Error!! </strong>Corrija los siguientes errores</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Nueva Pregunta</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {!!Form::open(['route' => 'preguntas.store','method'=>'POST','files' => true,'id'=>'form'])!!}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Pregunta Agregada Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            @include('administracion.preguntas.form.create')

            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
     <script src="{{url('administration/dist/js/preguntas/java-preguntas.js')}}"></script>
    <script src="{{url('administration/dist/js/alertify.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>

   


    
@endsection