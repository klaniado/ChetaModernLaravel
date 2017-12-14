@extends('layouts.html_base')

@section('title')
  Producto
@endsection

@section('cuerpo')
  <br><br>
    @foreach ($producto as $product)

      <div class=""  style="float:left;margin-bottom:4%;">
        <img src="{{ $product->images }}" width="50%" style=""alt="Imagen del producto">
      </div>

      <div class="" style="position:absolute;right:10%;">
          <h2 style="color:black;" >
            {{  $product->name  }}
          </h2>
        </div>
<br><br><br><br>

      <div class="" style="position:absolute;right:10%;">
        <h2 style="color:black;">
          ${{  $product->precio     }}
        </h2>
      </div>
<br><br>
    <div class="">
      <br><br><br>
      <h2 style="color:black;font-size:1.5em;">

        {{  $product->descripcion}}
      </h2>
    </div>
      @endforeach
@endsection
