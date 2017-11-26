@extends('layouts.html_base')

@section('titulo')
  Bienvenido
@endsection
@section('header')
  @parent
@endsection

@section('cuerpo')
  <section class="box-slider">
    <div class="slider">
              <ul>
                  <li><img src="img/responsive-banner.jpg"  alt=""></li>
                  <li><img src="img/BANNER.png" alt=""></li>
                  <li><img src="img/apple-banner.png" alt=""></li>
              </ul>
    </div>
    </section>
  <section>
  <article class="hindex">
  <br><br>
      <strong><h1>Lo Más Nuevo</h1></strong>
  </article>
  <article>
    <a href="mac"><img class="img-mac"src="img/productos/MacBookPro.png" alt="i1"><h2>Macs</h2></a>
    </article>
    <article>
    <a href="ipad"><img class="img-ipad"src="img/productos/IpadPro.png" alt="i2"><h2>Ipads</h2></a>
  </article>
    <article>
    <a href="iphone"><img class="img-iphone"src="img/productos/Iphone7.png" alt="i3"><h2>Iphones</h2></a>
  </article>
  </section>

@endsection
@section('footer')

      <footer>
        <ul class="footerstyle">
          <li class="foo-li"><a class="home" href="index">HOME</a></li><span class="foo-span">|</span>
          <li class="foo-li"><a class="faqs" href="indexpregfrec">FAQ'S</a></li><span class="foo-span">|</span>
          <li class="foo-li"><a class="foo-a" href="form">REGISTRATE</a></li><span class="foo-span">|</span>
          <li class="foo-li"><a class="foo-a" href="contacto">CONTACTO</a></li>
        </ul>
      </footer>

@endsection
