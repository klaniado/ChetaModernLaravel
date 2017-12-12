@extends('layouts.html_base')

@section('title')
  Categorias
@endsection
@section('header')
@parent
@endsection
@section('cuerpo')
  <div class="">
<br><br>
    @foreach ($categorias as $categoria)
      <a href="/categoria/{{ $categoria->id }}">
        <article style="width='150px';border:solid 2px rgb(247, 199, 104);margin-bottom:40px;">
          <img src="{{$categoria->images}}" width="250px"alt="">
          <h5>
            {{ $categoria->name }}
          </h5>
        </article>
      </a>
    @endforeach

</div>
@endsection
@section('footer')
@parent
@endsection
