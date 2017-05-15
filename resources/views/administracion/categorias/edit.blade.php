@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>
            Categorias
            <small>Editar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Categorias</li>
            <li class="active">Editar</li>
        </ol>
    </section>
@endsection

@section('contenido')

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
            <h3 class="box-title">Edición de Categoría</h3>
        </div><!-- /.box-header -->

        <div id="notificacion_resul_fanu"></div>
        <div class="box-body">
            {{Form::model($categoria, ['route' => ['categorias.update',$categoria->id],'method'=>'PUT' ])}}
                <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">
                <div class="form-group">
                    {!! Form::label('Nombre') !!}
                    {!! Form::text('nombre',null,['placeholder'=>'Nombre','class'=>'form-control','onkeypress'=>'return soloLetras(event)']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Descripción') !!}
                    {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control','onkeypress'=>'return soloLetras(event)']) !!}
                </div>
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
        </div>

    </div>


@endsection
@section('script')
    <script src="{{url('administration/dist/js/categorias/java-categoria.js')}}"></script>
    <script src="{{url('administration/dist/js/validaNumerosLetras.js')}}"></script>

@endsection