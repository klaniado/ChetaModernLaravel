@extends('layouts.html_base')
<script type="text/javascript">
  function validacion(){
    var reg = $.post('source/register.blade.php', {
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'edad' => 'required|int|max:150',
        'pais' => 'required|string',
        'password' => 'required|string|min:6|confirmed',
               });
               reg.done(function (data) {
                   if (data == "Success") {
                       window.location.href = "perfil.blade.php";
                   }
                   else {
                       alert("Hay errores en alguno de los campos");
                       location.reload();
                   }
               });
           });
  }
</script>



@section('cuerpo')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Register</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" style="margin-left:30vw;" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="edad" type="number" class="form-control" name="edad" value="{{ old('edad') }}" required>

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
                      		<select id="cmbPaises">
                      		</select>
                      	</div><br>
                      		<div class="">

                      				<label for="s-provincia">Provincia</label><br>
                      				<select id="cmbProvincia">
                      				</select>
                      			</div>


                      	</div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" style="margin-left:18vw;margin-top:4vw;" class="enviar" onClick="validacion();">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
