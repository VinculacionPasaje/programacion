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
                @if(count($footer) >0)
                    <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Fax</th>
                                    <th>Web</th>
                                    <th>Email</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($footer as $item)
                                    <tr data-id="{{$item->id}}">
                                        <td class="sorting_1">{!! $item->direccion !!}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->fax}}</td>
                                        <td>{{$item->web}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            {!!link_to_route('footer.edit', $title = 'Editar', $parameters = $item->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            

                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                            {{$footer->links()}}
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