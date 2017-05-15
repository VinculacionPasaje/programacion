<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

<div class="form-group">
    {!! Form::label('Nombres') !!}
    {!! Form::text('name',null,['placeholder'=>'Ingrese los Nombres','class'=>'form-control','onkeypress'=>'return soloLetras(event)']) !!}
</div>

<div class="form-group">
    {!! Form::label('Apellidos') !!}
    {!! Form::text('apellido',null,['placeholder'=>'Ingrese los Apellidos','class'=>'form-control','onkeypress'=>'return soloLetras(event)']) !!}
</div>

<div class="form-group">
    {!! Form::label('Correo') !!}
    {!! Form::email('email',old('email'),['placeholder'=>'Ingrese el correo','class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Contraseña') !!}
    {!! Form::password('password',old('password'),['class' => 'form-control', 'placeholder' => 'Password']) !!}
</div>