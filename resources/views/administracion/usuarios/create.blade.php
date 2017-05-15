@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Usuarios<small>Agregar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Usuarios</li>
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
            <h3 class="box-title">Nuevo Usuario</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {!!Form::open(['route' => 'usuarios.store','method'=>'POST','files' => true,'id'=>'form'])!!}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Usuario Agregado Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            @include('administracion.usuarios.form.create')
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/usuarios/delete-usuarios.js')}}"></script>
    <script src="{{url('administration/dist/js/validaNumerosLetras.js')}}"></script>
    <script src="{{url('administration/dist/js/alertify.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
    
@endsection