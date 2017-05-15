@extends('layouts.app')
@section('title')
<title>Enviar Email</title>

@endsection

@section('contenido')

<div class="page-container">

            <div class="panel panel-default" style="height: 250px;">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span>  <h1>Reset Password</h1>
                </div>
                <div class="panel-body">
           
                                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Ingrese su Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar link para Reset Password
                                </button>
                            </div>
                        </div>
                    </form>



                         </div>
                 </div>
            
        </div>




@endsection
