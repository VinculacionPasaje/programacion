@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Preguntas<small>Editar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Preguntas</li>
            <li class="active">Editar</li>
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
            <h3 class="box-title">Editar Pregunta</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {{Form::model($preguntas, ['route' => ['preguntas.update',$preguntas->id],'method'=>'PUT','files' => true ])}}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Pregunta Agregada Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">
            <div class="form-group">
                {!! Form::label('Pregunta') !!}
                {!! Form::text('pregunta',null,['placeholder'=>'Pregunta','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label('Respuesta') !!}
                    {!! Form::textarea('respuesta',null,['class'=>'form-control', 'rows' => 10, 'placeholder'=>'Respuesta']) !!}
                    
                </div>

          
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
         <script src="{{url('administration/dist/js/preguntas/java-preguntas.js')}}"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>



@endsection