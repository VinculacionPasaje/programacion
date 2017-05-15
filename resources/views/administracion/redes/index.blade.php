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
                    <h3 class="box-title">Redes sociales Registrados</h3>

                   
                </div>
                <!-- /.box-header -->
                @if(count($redes) >0)
                    <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>ID</th>
                                    <th>Url</th>
                                    <th>Descipción</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($redes as $red)
                                    <tr data-id="{{$red->id}}">
                                        <td class="sorting_1">{{$red->id}}</td>
                                        <td>{{$red->url}}</td>
                                        <td>{{$red->descripcion}}</td>
                                        <td>
                                            {!!link_to_route('redes.edit', $title = 'Editar', $parameters = $red->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            

                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                            {{$redes->links()}}
                        </div>
                    </div>
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna red social...</label>  </div>
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