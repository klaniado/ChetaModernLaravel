@extends('layouts.html_base')

@section('header')
    @parent
@endsection
@section('cuerpo')
  <div class="medio">
    <h1>Contactanos</h1><br><br>
    <form  action="" method="post">
      <label for="">Nombre</label><br>
      <input class="contacto" type="text" name="user" value=""placeholder=" Nombre"><br><br>
      <label for="">Email</label><br>
      <input class="contacto" type="email" name="" value=""placeholder=" E-mail"><br><br>
      <label for="">Mensaje</label><br>
      <textarea class="mensaje"name="mensaje" placeholder=" Escriba aqui su mensaje y lo contactaremos a la brevedad."></textarea><br><br><br><br>
      <button type="submit"class="enviar" name="button">Enviar</button>
    </form>
    <br><br>
  </div>
@endsection
@section('footer')
    @parent
@endsection
