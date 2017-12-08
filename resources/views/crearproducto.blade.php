@extends('layouts.html_base')

@section('title')
Nuevo producto
@endsection
@section('header')
    @parent
@endsection
@section('cuerpo')
<form class="" action="http://localhost:8000/productos/crear" method="post" enctype="multipart/form-data">

  {{ csrf_field() }}

<div class="img">

  <label for="img">Subir una imagen </label>
  <input type="file"  name="img" value="">

</div><br>
<div class="nombre">

  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" value="">

</div><br>
<div class="precio">

  <label for="precio">Precio</label>
  <input type="text" name="precio" value="">

</div><br>
<div class="descripcion">

  <label for="descripcion">Descripcion</label><br>
  <textarea name="descripcion" style="resize:vertical;" rows="4" cols="40" ></textarea>

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
@section('footer')
    @parent
@endsection
