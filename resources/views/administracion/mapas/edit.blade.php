@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Mapas<small>Editar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Mapas</li>
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
            <h3 class="box-title">Editar Mapas</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {{Form::model($mapas, ['route' => ['mapas.update',$mapas->id],'method'=>'PUT','files' => true ])}}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Mapa Editado Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">
            
            <div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo') !!}
                            {!! Form::text('titulo',null,['placeholder'=>'Nombre','class'=>'form-control']) !!}
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                           <div class="form-group">
                            {!!Form::label('Foto','Foto:')!!}
                            {!!Form::file('path',['class'=>'form-control'])!!}
                        </div>
                </div>

            </div>



                <div class="row" ><!--Inicio de row -->
                                <div class="col-md-6 col-xs-12">

                                <div class="form-group">
                                    {!! Form::label('Descripción') !!}
                                    {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                                </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-12">

                                 {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                                    
                                </div>

                </div>
              

            
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/mapas/java-mapas.js')}}"></script>
    

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
    
    

@endsection