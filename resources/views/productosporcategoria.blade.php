@extends('layouts.html_base')

@section('title')
  Productos por categoria
@endsection
@section('header')
@parent
@endsection
@section('cuerpo')
  <div class="">

      @foreach ($productos as $producto)
        <article class="">

          {{ $producto->name }}

        </article>
      @endforeach

</div>
@endsection
@section('footer')
@parent
@endsection
