@extends('layouts.html_base')

@section('title')
  Perfil
@endsection
@section('cuerpo')
  <div class="medio">
    <a href="/perfilDeUsuario">
      <div class="logueadoizq">
        <img class="imgslogueado1" width="150px"src="img/perfil.jpg" alt=""><br>
        <h5>Mi Perfil</h5>
    </div>
    </a>
    <a href="/editar/{{Auth::user()->id}}">
      <div class="logueadoder">
        <img class="imgslogueado2" width="150px"src="img/editar.jpg" alt=""><br>
        <h5>Editar</h5>
      </div>
    </a>
    <a href="/productos/crear">
      <div class="logueadoder">
        <img class="imgslogueado2" width="150px"src="img/editar.jpg" alt=""><br>
        <h5>Vender</h5>
      </div>
    </a><br><br><br><br><br><br><br><br>
    <form action="/logout" method="post">
      {{ csrf_field() }}
      <button type="submit">Cerrar sesión</button>

    </form>

  </div>
  <br><br><br><br><br><br>
@endsection
