@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Footer<small>Actualizar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Footer</li>
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
            <h3 class="box-title">Edición de Datos del Footer</h3>
        </div><!-- /.box-header -->

        <div id="notificacion_resul_fanu"></div>
        <div class="box-body">
            {{Form::model($footer, ['route' => ['footer.update',$footer->id],'method'=>'PUT' ])}}
                <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

                <div class="row" ><!--Inicio de row -->
                        <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('Dirección') !!}
                                    {!! Form::text('direccion',null,['placeholder'=>'Ingrese dirección','class'=>'form-control']) !!}
                                </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('Teléfono') !!}
                                    {!! Form::text('telefono',null,['placeholder'=>'Ingrese teléfono','class'=>'form-control']) !!}
                                </div>
                        </div>

                 </div>


                  <div class="row" ><!--Inicio de row -->
                        <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('FAX') !!}
                                    {!! Form::text('fax',null,['placeholder'=>'Ingrese fax','class'=>'form-control']) !!}
                                </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('Web') !!}
                                    {!! Form::text('web',null,['placeholder'=>'Ingrese Url','class'=>'form-control']) !!}
                                </div>
                        </div>

                 </div>

                  <div class="row" ><!--Inicio de row -->
                        <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('Correo') !!}
                                    {!! Form::email('email',old('email'),['placeholder'=>'Ingrese el correo','class'=>'form-control']) !!}
                                </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('Año') !!}
                                    {!! Form::text('anio',null,['placeholder'=>'Ingrese el año','class'=>'form-control','onkeypress'=>'return soloNumeros(event)']) !!}
                                </div>
                        </div>

                 </div>


                
                 

                
                
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
        </div>

    </div>
@endsection
@section('script')
   
<script src="{{url('administration/dist/js/validaNumerosLetras.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection