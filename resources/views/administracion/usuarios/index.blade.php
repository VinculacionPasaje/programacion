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
                    <h3 class="box-title">Usuarios Registrados</h3>

                    <div class="box-tools">
                         {!! Form::open(['route'=>'usuarios.index', 'method'=> 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
                        <div class="input-group input-group-sm" style="width: 350px;">
                            {!!Form::text('table_search', null, ['class'=>'form-control pull-right', 'placeholder'=>'Búscar por nombre']) !!}

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>

                            <div class="input-group-btn">
                                    <a href="{{route('usuarios.index')}}" class="btn btn-primary btn-sm" role="button">Mostrar Todos</a>
                           </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.box-header -->
                 @if(count($usuarios) >0)

                   @if(count($busqueda) >0) <!-- este if es para la busqueda -->

                 <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($busqueda as $usuario)
                                @if($usuario->estado !=0)
                                    <tr data-id="{{$usuario->id}}">
                                        <td>
                                            <img src="{{url('uploads/'.$usuario->path)}}" alt="" style="width:70px;"/>
                                        </td>
                                       
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->apellido}}</td>
                                        <td>{{$usuario->email}}</td>
                                        
                                        <td>
                                            @if(Auth::user()->id_roles == 2)
                                            {!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class'=>'btn  btn-primary btn-sm', 'disabled'], array('disabled'))!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete" disabled ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>
                                            @else
                                            {!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete" ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>


                                            @endif
                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </table>
                            {{$usuarios->links()}}
                        </div>
                    </div>

                  @endif
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun Usuario...</label>  </div>
                @endif
              
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['usuarios.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{url('administration/dist/js/usuarios/delete-usuarios.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection