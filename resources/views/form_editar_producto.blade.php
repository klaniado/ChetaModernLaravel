@extends('layouts.html_base')

@section('title')
Nuevo producto
@endsection

@section('cuerpo')
<form class="" action="{{ route('editar-producto', $producto) }}" method="post" enctype="multipart/form-data" style="text-align:center">
      {{ csrf_field() }}
<div class="name">

  <label for="name" >Nombre: </label><br>
  <input type="text" name="name" value="{{$producto->name }}" class="form-control">

</div><br>
<div class="descripcion">

  <label for="descripcion" style=>Descripcion:      </label><br>
  <textarea name="descripcion" style="resize:vertical;" rows="4" cols="40" >{{$producto->descripcion}}</textarea>

</div><br>
<div class="precio">

  <label for="precio">Precio:</label><br>
  <input type="number" name="precio" value="{{$producto->precio }}">

</div><br>
<div class="images">

  <label for="images">Subir una imagen: </label><br>
  <input type="file"  name="images" value="{{$producto->images }}" class="form-control">

</div><br><br>
<label for="categoria">Categoria: </label><br>
<select class="categorias_id" name="categorias_id">
@foreach ($categorias as $categoria)

  <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
<br><br>
@endforeach
</select>
<div class="boton">
<br><br>
  <input type="submit" name="boton" value="Editar" class="enviar">

</div>


</form>
@endsection
