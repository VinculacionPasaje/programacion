<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

<div class="form-group">
    {!! Form::label('Pregunta') !!}
    {!! Form::text('pregunta',null,['placeholder'=>'Pregunta','class'=>'form-control']) !!}
</div>
   <div class="form-group">
        {!! Form::label('Respuesta') !!}
        {!! Form::textarea('respuesta',null,['class'=>'form-control', 'rows' => 10, 'placeholder'=>'Respuesta']) !!}
        
    </div>