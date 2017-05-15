@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>
            Inicio
            <small>Listar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Inicio</li>
        </ol>
    </section>
@endsection

@section('contenido')
    @if (session('mensaje-registro'))
        @include('mensajes.msj_correcto')
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Contenido Registrado</h3>

                   
                </div>
                <!-- /.box-header -->
                @if(count($turismo) >0)
                    <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>Titulo</th>
                                    <th>Contenido</th>
                                    <th>Fecha</th>
                                    <th>Visitas</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($turismo as $item)
                                    <tr data-id="{{$item->id}}">
                                        <td>{{$item->titulo}}</td>
                                        <td class="sorting_1">{!! $item->contenido !!}</td>
                                        <td>{{$item->fecha}}</td>
                                        <td>{{$item->contador_visitas}}</td>
                                        <td>
                                            {!!link_to_route('turismo.edit', $title = 'Editar', $parameters = $item->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            

                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                            {{$turismo->links()}}
                        </div>
                    </div>
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun contenido...</label>  </div>
                @endif
            </div>
            <!-- /.box -->
        </div>
    </div>

    
    {!! Form::close() !!}
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