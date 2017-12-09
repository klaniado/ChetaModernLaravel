@extends('layouts.html_base')

@section('title')
  Productos
@endsection
@section('header')
  @parent
@endsection
  @section('cajita')
  @endsection

  @section('cuerpo')
    <div class="container2">

      <div class="categorias">
        <ul>
          @foreach ($categorias as $categoria)
            <a href="/categoria/{{ $categoria->id }}">
              <li>{{ $categoria->name }}</li>
            </a>
          @endforeach
        </ul>
      </div>

      <div class="productos2">
        <table>
          @foreach ($productos as $producto)

              <tr>
                <td class="tdimg" ><img width="60px;" src={{$producto->images}}></td>
                <td class="tdname" ><h2>{{ $producto->name }}</h2></td>
                <td class="tdprecio" ><h2>{{ $producto->precio }}</h2></td>
                <td><form class="" action="http://localhost:8000/producto/{{$producto->id}}" method="post">{{ csrf_field() }}
                  <input  style="width:100px;" type="submit" name="" value="Ver Producto">
                </form></td>
              </tr>

          @endforeach
        </table>
      </div>

    </div>
  </div>

    {{ $productos->links() }}

  @endsection

@section('footer')
  @parent
@endsection
