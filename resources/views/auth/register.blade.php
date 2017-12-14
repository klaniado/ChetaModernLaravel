@extends('layouts.html_base')
@section('title')
  Registro
@endsection
@section('cuerpo')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Register</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" style="margin-left:30vw;" method="POST" action='/register'>
                        {{ csrf_field() }}
                        {{ method_field('POST')}}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control" name="edad" value="{{ old('edad') }}">

                                @if ($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="primeraParte"><br>
                      <div class="">

                      		<label for="cmbPaises">Pais</label><br>
                      		<select name="pais" id="cmbPaises">
                      		</select>
                          @if ($errors->has('pais'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('pais') }}</strong>
                              </span>
                          @endif
                      	</div><br>
                      		<div class="">

                      				<label for="s-cmbProvincia">Provincia</label><br>
                      				<select name="provincia" id="cmbProvincia">
                      				</select>
                      			</div>
                      	</div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <input type="submit" id="submitRegistro" style="margin-left:18vw;margin-top:4vw;" value="Register"class="enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
