@extends('layouts.html_base')

@section('title')
  Editar
@endsection
@section('cuerpo')
<form class="" action="{{ route('editar_usuario_post', $usuario) }}" method="post" enctype="multipart/form-data" style="text-align:center">
<div class="name">

  <label for="name" >Nombre: </label><br>
  <input type="text" name="name" value="{{$usuario->name }}" class="form-control">

</div><br>
<div class="email">

  <label for="email" style=>Email:      </label><br>
  <input type="text" name="name" value="{{$usuario->email }}" class="form-control">

</div><br>
<div class="edad">

  <label for="edad">Edad:</label><br>
  <input type="number" name="edad" value="{{$usuario->edad }}">

</div><br>


<div class="boton">
<br><br>
  <input type="submit" name="boton" value="Editar" class="enviar">

</div>


</form>


@endsection
