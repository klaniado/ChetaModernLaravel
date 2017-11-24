@extends('layouts.html_base')

@section('header')

@endsection
@section('cuerpo')
  <div class="">
    <br><br><br><br>
    <table>

      <td>
      @foreach ($categorias as $categoria)
        <h2>{{ $producto->name }}</h2><br>
      @endforeach
    </td>
      
  </table>
</div>
@endsection
@section('footer')

@endsection
