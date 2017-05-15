@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Mapas<small>Agregar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Mapas</li>
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
            <h3 class="box-title">Nuevo Mapa</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {!!Form::open(['route' => 'mapas.store','method'=>'POST','files' => true,'id'=>'form'])!!}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Mapa Agregado Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            @include('administracion.mapas.form.create')
          
           
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/mapas/java-mapas.js')}}"></script>
    <script src="{{url('administration/dist/js/alertify.js')}}"></script>
     
    

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
   

@endsection