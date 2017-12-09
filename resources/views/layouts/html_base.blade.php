<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  </head>
  <body>
    @section('header')
      <header >


        @if (Auth::check())

          <form  action="/logout" method="post" style=" ">
            {{ csrf_field() }}

            <button type="submit" style="float:right;margin-left:89vw;margin-right:1vw;background-color:rgba(248, 251, 89, 1)" >Cerrar sesión</button>
          </form>
        @endif

          <a id="logo" href="http://localhost:8000/index"><img id="logoimg" src="img/logo_header.png" alt=""></a>
          <div class="header">
          <input id="buscador" type="search" name="search" placeholder="  ¿Qué estas buscando?" value="">
          <button id="send" type="submit" name="send"><i id="lupa" class="fa fa-search" aria-hidden="true"></i></button>

        </div>
        <div class="menu">
          <label for="menu"><i id="lmen" class="fa fa-list" aria-hidden="true">Menú</i></label>
          <input id="menu" type="checkbox" name="" value="">
          <nav class="menu-nav">
              <a   href="http://localhost:8000/index">
              <li class="headerli">
                <i class="fa fa-home"></i>
                <h6 class="h6header">Home</h6>
                </li>
              </a>
              <a   href="http://localhost:8000/categorias">
            <li class="headerli">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <h6 class="h6header">Categorías</h6>
            </li>
          </a>
              <a   href="http://localhost:8000/productos">
                <li class="headerli">
                <i class="fa fa-mobile" aria-hidden="true"></i>
               <h6 class="h6header">Productos</h6>
             </li>
              </a>
              <a   href="http://localhost:8000/login">
                <li class="headerli">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <h6 class="h6header">Cuenta</h6>
              </li>
              </a>
              <a   href="http://localhost:8000/contacto">
                <li class="headerli">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <h6 class="h6header">Contacto</h6>
              </li>
              </a>
              <a  class="menu-pregfre" href="http://localhost:8000/preguntasfrecuentes">
                <li class="headerli">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                  <h6 class="h6header">FAQs</h6>
              </li>
              </a>
        </nav>
      </div>
    </div>
      </header>
    @show

    @yield('cajita')
    @yield('cuerpo')
    @section('footer')
         <footer>
            <ul class="footerstyle">
              <li class="foo-li"><a class="home" href="http://localhost:8000/index">HOME</a></li><span class="foo-span">|</span>
              <li class="foo-li"><a class="faqs" href="http://localhost:8000/preguntasfrecuentes">FAQ'S</a></li><span class="foo-span">|</span>
              <li class="foo-li"><a class="foo-a" href="http://localhost:8000/register">REGISTRATE</a></li><span class="foo-span">|</span>
              <li class="foo-li"><a class="foo-a" href="http://localhost:8000/contacto">CONTACTO</a></li>
            </ul>
        </footer>
    @show
  </body>
</html>
