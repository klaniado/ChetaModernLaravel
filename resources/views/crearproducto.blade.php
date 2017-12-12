@extends('layouts.html_base')

@section('title')
Nuevo producto
@endsection

@section('cuerpo')
<form class="" action="/productos/crear" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('post') }}
<div class="name">

  <label for="name">Nombre</label>
  <input type="text" name="name" value="">

</div><br>
<div class="descripcion">

  <label for="descripcion">Descripcion</label><br>
  <textarea name="descripcion" style="resize:vertical;" rows="4" cols="40" ></textarea>

</div><br>
<div class="precio">

  <label for="precio">Precio</label>
  <input type="number" name="precio" value="">

</div><br>
<div class="images">

  <label for="images">Subir una imagen </label>
  <input type="file"  name="images" value="">

</div><br>
<select class="categorias_id" name="categorias_id">
@foreach ($categorias as $categoria)

  <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>

@endforeach
</select>
<div class="boton">

  <input type="submit" name="boton" value="Crear">

</div>


</form>
@endsection
