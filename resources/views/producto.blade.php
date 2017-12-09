@extends('layouts.html_base')

@section('title')
  Producto
@endsection

@section('header')
  @parent
@endsection
@section('cuerpo')
  @foreach ($producto as $product)

{{  $product->name       }}
{{  $product->precio     }}
{{  $product->descripcion}}
@endforeach
@endsection
@section('header')
  @parent
@endsection
