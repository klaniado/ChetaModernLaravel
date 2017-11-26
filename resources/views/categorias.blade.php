@extends('layouts.html_base')

@section('header')
@parent
@endsection
@section('cuerpo')
  <div class="">

      @foreach ($categorias as $categoria)
        <article class="">

          {{ $categoria->name }}

        </article>
      @endforeach

</div>
@endsection
@section('footer')
@parent
@endsection
