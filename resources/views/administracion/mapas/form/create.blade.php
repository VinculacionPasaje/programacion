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
                            {!!Form::label('Foto','Foto:')!!}
                            {!!Form::file('path',['class'=>'form-control'])!!}
                        </div>
                </div>

</div>



<div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">

                 <div class="form-group">
                    {!! Form::label('Descripción') !!}
                    {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                </div>
                      
                </div>
                <div class="col-md-6 col-xs-12">

                 {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                       
                </div>

</div>

