@extends('layouts.html_base')

@section('title')
Nuevo producto
@endsection

@section('cuerpo')
<form class="" action="/productos/crear" method="post" enctype="multipart/form-data" style="text-align:center">
      {{ csrf_field() }}
      {{ method_field('post') }}
<div class="name">

  <label for="name" >Nombre: </label><br>
  <input type="text" name="name" value="" class="form-control">

</div><br>
<div class="descripcion">

  <label for="descripcion" style=>Descripcion:      </label><br>
  <textarea name="descripcion" style="resize:vertical;" rows="4" cols="40"></textarea>

</div><br>
<div class="precio">

  <label for="precio">Precio:</label><br>
  <input type="number" name="precio" value="$">

</div><br>
<div class="images">

  <label for="images">Subir una imagen: </label><br>
  <input type="file"  name="images" value="" class="form-control">

</div><br><br>
<select class="categorias_id" name="categorias_id">
@foreach ($categorias as $categoria)

  <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
<br><br>
@endforeach
</select>
<div class="boton">
<br><br>
  <input type="submit" name="boton" value="Crear" class="enviar">

</div>


</form>
@endsection
