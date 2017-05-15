<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">


   <div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Nombre del Hospedaje') !!}
                            {!! Form::text('titulo',null,['placeholder'=>'Nombre','class'=>'form-control']) !!}
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            {!! Form::label('Fecha de Publicación') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name = "fecha_post" value="{{old('fecha_post')}}">
                        </div>
                    </div>
                </div>

</div>

<div class="form-group">
    {!! Form::label('Descripción del Hospedaje') !!}
    {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
</div>

<div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!!Form::label('Foto','Foto:')!!}
                            {!!Form::file('path',['class'=>'form-control'])!!}
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Seleccione el tipo de Hospedaje</label>
                            <select class="form-control select2" name="id_categorias" id="categorias" style="width: 100%;" >
                                <option value="" disabled selected>Seleccione tipo de Hospedaje</option>
                                @foreach($categorias as $categoria)
                                   @if (old('id_categorias') == $categoria->id)
                                        <option value="{{$categoria->id}}" selected>{{ $categoria->categoria }}</option>
                                    @else
                                        <option value="{{$categoria->id}}">{{ $categoria->categoria }}</option>
                                    @endif             
                                @endforeach
                                 
                            </select>
                        </div>
                </div>

</div>

<div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                       <div class="form-group">
                            <label>Número de Estrellas</label>
                            <select class="form-control select2" name="estrellas" id="estrellas" style="width: 100%;" >
                            
                             <?php $count = 5?>

                                <option value="" disabled selected>Escoja el número de estrellas</option>
                                @for($i = 1; $i <= $count; $i++) 

                                  <option value="{{ $i }}">{{ $i }}</option>


                                @endfor


                              
                                 
                            </select>
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                        
                     {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                </div>

</div>








  <div class="form-group">
                {!! Form::label('Contenido') !!}
                
                                                
                {!! Form::textarea('contenido',null,['class'=>'form-control', 'rows' => 50]) !!}
                                
</div>