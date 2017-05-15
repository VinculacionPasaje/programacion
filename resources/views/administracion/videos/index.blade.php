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
                    <h3 class="box-title">Videos Registrados</h3>

                   
                </div>
                <!-- /.box-header -->
                @if(count($videos) >0)
                    <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    
                                    <th>Titulo</th>
                                    <th>Descipción</th>
                                    <th>Url</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($videos as $video)
                                    <tr data-id="{{$video->id}}">
                                        
                                        <td>{{$video->titulo}}</td>
                                        <td>{{$video->descripcion}}</td>
                                        <td>{{$video->url}}</td>
                                        
                                        <td>
                                            {!!link_to_route('videos.edit', $title = 'Editar', $parameters = $video->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            

                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                            {{$videos->links()}}
                        </div>
                    </div>
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun video...</label>  </div>
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