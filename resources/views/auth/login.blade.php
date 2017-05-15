@extends('layouts.app')
@section('title')
<title>Login</title>

@endsection

@section('contenido')

      

        <div class="page-container">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span>  <h1>Login</h1>
                </div>
                <div class="panel-body">
           
                                    <form action="{{ route('login') }}" method="post">
                                        {{ csrf_field() }}
                                        
                                        

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo Electronico">
                                        
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    
                                        </div>

                                        

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    

                                                
                                                </div>

                                                <div class="form-group">
                                                
                                                        <button type="submit">
                                                            Ingresar
                                                        </button>

                                                       
                                                
                                                </div>

                                    
                                        <div class="error"><span>+</span></div>
                                    </form>
                                <div class="panel-footer">

                                     <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            Olvidaste la contraseña?
                                                        </a>
    
                                       
                                </div>
                         </div>
                 </div>
            
        </div>

@endsection
