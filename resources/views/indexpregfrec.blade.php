@extends('layouts.html_base')
@section('scriptsjs')

    <script type="text/javascript" src="/js/jquery-3.2.1.js">
    </script>

@endsection
@section('cuerpo')
  <div class="pregfrec">
    <strong><h2 class="title"><a class="title"href="">Preguntas Frecuentes</a></h2></strong><br><br><br>

  <ol type="">
    <li class="submenu">
      <p><i class="pregs" onclick="">¿Como realizo mi compra?</i></p>
      <br>
        <ul>
          <li>
        <p>  Ingresá en <a href="/index">www.cheetatechs.com.ar </a> registrate o comprá como invitado. Te recomendamos registrarte ya que accedés a Múltiples beneficios como poder ver online el estado de tu pedido y tener tu historial de compra entre otros.
        Luego seleccioná la opción COMPRA ONLINE para poder navegar en nuestro catálogo de productos y realizar tus compras de manera rápida, fácil y simple.</p>
          </li>
        </ul>
     </li>
     <br>
    <li class="submenu">
      <p><i class="pregs">¿Cómo hago para modificar mis datos?</i></p>
      <br>
        <ul>
          <li>

        <p>Ingresando en <a href="/login">“Mi cuenta”</a> podés editar o modificar tus datos, dirección contraseña u otros.
        Cualquier duda/consulta, recordá que podés comunicarte con nuestros asesores al 0800-123-12312 opción 2 de Lunes a viernes de 8:30 a 22:00 horas.  </p>
          </li>
        </ul>
      <br>
    </li>
    <li class="submenu">
      <p><i class="pregs">¿Como me registro?</i></p><br>
        <ul>
          <li>
        <p>Podrás crear tu cuenta en el siguiente link: <a href="/login">Registrate </a>donde debés completar todos los datos solicitados.</p>
          </li>
        </ul>
      <br>
    </li>


    <li class="submenu">
      <p><i class="pregs">¿Como realizo mi compra?</i></p><br>
        <ul>
          <li>
        <p>Ingresá en <a href="/index">www.cheetatechs.com.ar </a> y registrate. Te recomendamos registrarte ya que accedés a Múltiples beneficios como poder ver online el estado de tu pedido y tener tu historial de compra entre otros.
        Luego seleccioná la opción <a href="/productos">COMPRA ONLINE </a> para poder navegar en nuestro catálogo de productos y realizar tus compras de manera rápida, fácil y simple.</p>
          </li>
        </ul>
      <br>
    </li>
    <li class="submenu">
      <p><i class="pregs">¿Puedo anular una compra?</i></p><br>
        <ul>
          <li>
        <p>Para anular tu pedido es necesario que te comuniques con nosotros al 0800-123-12312 opción 2 así podemos asistirte.</p>
          </li>
        </ul>
      <br>
    </li>
    <li class="submenu">
      <p><i class="pregs">¿Cuales son los medios de pago disponibles?</i></p><br>
        <ul>
          <li>
        <p>Podés abonar tu pedido con una amplia cantidad de Tarjetas de Crédito. <br><img class="tarjetas" src="/img/creditcards.jpg" alt="tarjetas de credito"><br> Deben estar emitidas dentro de la Republica Argentina. </p>
          </li>
        </ul>
      <br>
    </li>
    <li class="submenu">
      <p><i class="pregs">Me olvide mi contraseña... ¿Que hago?</i></p><br>
      <ul>
        <li>
        <p>  Si no recordás tu contraseña podés hacer clik en el enlace <a href="/login">"Cuenta"</a> - "Olvidé mi contraseña" ubicado en la parte inferior de la página principal. En la nueva página te pedirá escribir tu dirección de e-mail con la cual te registraste. Después de haber confirmado tus datos, recibirás un e-mail en tu correo en el cual te permitira elegir una nueva contraseña. </p>
        </li>
      </ul>
     <br>
    </li>
    <li class="submenu">
      <p><i class="pregs">¿Los productos tienen garantia?</i></p><br>
      <ul>
        <li>
        <p> Todos nuestros productos cuentan con una garantia del fabricante de 6 meses. Ademas nosotros otorgamos 3 dias de prueba y 30 dias para cambios por cualquier inconveniente.  </p>
        </li>
      </ul>
     <br>
    </li>
  </ol>
  </div>

@endsection
