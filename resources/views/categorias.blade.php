@extends('layouts.html_base')

@section('title')
  Categorias
@endsection
@section('header')
@parent
@endsection
@section('cuerpo')
  <div class="">

    @foreach ($categorias as $categoria)
      <a href="/categoria/{{ $categoria->id }}">
        <article>{{ $categoria->name }}</article>
      </a>
    @endforeach

</div>
@endsection
@section('footer')
@parent
@endsection
