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
                            {!! Form::label('Fecha del Post') !!}
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
    {!! Form::label('Descripción') !!}
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
                            <label>Eliga la Categoria</label>
                            <select class="form-control select2" name="id_categorias" id="categorias" style="width: 100%;" >
                                <option value="" disabled selected>Seleccione la categoria</option>
                                @foreach($categorias as $categoria)

                                @if (old('id_categorias') == $categoria->id)
                                        <option value="{{$categoria->id}}" selected> {{ $categoria->categoria }}</option>
                                    @else
                                        <option value="{{$categoria->id}}"> {{ $categoria->categoria }}</option>
                                    @endif       
                                    
                                @endforeach
                            </select>
                        </div>
                </div>

</div>






  <div class="form-group">
                {!! Form::label('Contenido') !!}
                
                                                
                {!! Form::textarea('contenido',null,['class'=>'form-control', 'rows' => 50]) !!}
                                
</div>

<div class="row" ><!--Inicio de row -->
                 
                <div class="col-md-6 col-xs-12">
                        
                     {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                </div>

</div>