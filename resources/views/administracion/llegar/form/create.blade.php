<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">



<div class="form-group">
    {!! Form::label('Titulo') !!}
    {!! Form::text('titulo',null,['placeholder'=>'Nombre','class'=>'form-control']) !!}
</div>
               


<div class="form-group">
    {!! Form::label('Script') !!}
    {!! Form::text('script',null,['placeholder'=>'ingrese el script de google map','class'=>'form-control']) !!}
</div>



  <div class="form-group">
                {!! Form::label('Contenido') !!}
                
                                                
                {!! Form::textarea('contenido',null,['class'=>'form-control', 'rows' => 50]) !!}
                                
</div>


{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}