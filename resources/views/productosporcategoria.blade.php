@extends('layouts.html_base')

@section('title')
  Productos por categoria
@endsection

@section('cuerpo')

  <div class="" style="margin-top:4vw;">
      <h2>Productos </h2>

      @foreach ($productos as $producto)
        <article class="" style="border:solid 2px orange;margin-bottom:3vw">

          <img src="{{ $producto->images }}" width="150vw" alt="imagen del producto"><br>
          <h4>{{ $producto->name }}</h4>

          <h5>${{ $producto->precio }}</h5>
          <form class="" action="/producto/{{$producto->id}}" method="post">{{ csrf_field() }}
            <input  style="width:100px;" type="submit" name="" value="Ver Producto">
          </form><br>
        </article>
      @endforeach

</div>
@endsection
