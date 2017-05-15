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
                    <div class= "col-xs-6 col-md-6" aling="center">
                        <h3 class="box-title">Categorias Registradas</h3>

                    </div>
                    
                     <div class= "col-xs-6 col-md-6">

                            <div class="box-tools">
                                {!! Form::open(['route'=>'categorias.index', 'method'=> 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
                                <div class="input-group input-group-sm" style="width: 350px;">
                                
                                    {!!Form::text('table_search', null, ['class'=>'form-control pull-right', 'placeholder'=>'Búscar por nombre']) !!}

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>

                                     <div class="input-group-btn">
                                    <a href="{{route('categorias.index')}}" class="btn btn-primary btn-sm" role="button">Mostrar Todos</a>
                                     </div>

                                    
                                    
                                </div>
                                

                                {!! Form::close() !!}
                                
                                    
                            
                                
                                </div>
                    </div>
                </div>
                <!-- /.box-header -->
               
                @if(count($categorias) >0)  <!-- este if es para ver si hay datos registrados en la BD -->
                     @if(count($cat) >0) <!-- este if es para la busqueda y muestreo de datos -->

                
                
                 <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($cat as $categoria)
                                 @if($categoria->estado !=0)
                                    <tr data-id="{{$categoria->id}}">
                                        <td class="sorting_1">{{$categoria->id}}</td>
                                        <td>{{$categoria->nombre}}</td>
                                        <td>{{$categoria->descripcion}}</td>
                                        <td>
                                            {!!link_to_route('categorias.edit', $title = 'Editar', $parameters = $categoria->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"  ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>

                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </table>
                            {{$categorias->links()}}
                        </div>
                    </div>
                     @endif
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna categoria...</label>  </div>
                @endif
                
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['categorias.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{url('administration/dist/js/categorias/java-categoria.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection