@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Videos<small>Actualizar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Videos</li>
            <li class="active">Actualizar</li>
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
            <h3 class="box-title">Edición de Videos</h3>
        </div><!-- /.box-header -->

        <div id="notificacion_resul_fanu"></div>
        <div class="box-body">
            {{Form::model($video, ['route' => ['videos.update',$video->id],'method'=>'PUT' ])}}
                <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

                <div class="form-group">
                    {!! Form::label('Titulo') !!}
                    {!! Form::text('titulo',null,['placeholder'=>'Ingrese titulo del video','class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Descripción') !!}
                    {!! Form::text('descripcion',null,['placeholder'=>'Ingrese Descripcion del video','class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Url') !!}
                    {!! Form::text('url',null,['placeholder'=>'Ingrese Url','class'=>'form-control']) !!}
                </div>
                
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
        </div>

    </div>
@endsection
@section('script')
   
    
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection