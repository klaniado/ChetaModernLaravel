@extends('layouts.html_base')

@section('header')
  @parent
@endsection

@section('cuerpo')
  <div class="container"><br><br><br><br>
    <h1>Bienvenido al perfil de {{ $usuario ->name }}</h1>
    <ul>
      <li>Nombre:  {{ $usuario ->name }} </li>
      <li>Email:  {{ $usuario ->email }}</li>
      <li>Edad:  {{ $usuario ->name }}</li>
      <li>Pais:  {{ $usuario ->name }}</li>
    </ul>

    <img width="100" src="img/b@b.com.png" alt="">

  <br><br>
  <h6 class="botones"><a href="index">Ir al inicio</a></h6>
  <h6 class="botones"><a href="{{Auth::logout()}}">Cerrar sesion</a></h6>

  </div>

@endsection

@section('footer')
  @parent
@endsection
