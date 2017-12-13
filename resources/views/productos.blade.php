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

                <div class="productos2">
                  <table>
                    @forelse($productos as $producto)
                        <tr>
                          <td class="tdimg" ><img width="60px;" src={{$producto->images}}></td>
                          <td class="tdname" ><h2>{{ $producto->name }}</h2></td>
                          <td class="tdprecio" ><h2>{{ $producto->precio }}</h2></td>
                          <td><form class="" action="/producto/{{$producto->id}}" method="post">{{ csrf_field() }}
                            <input  style="width:100px;" type="submit" name="" value="Ver Producto">
                          </form></td>
                          <td><form class="" action="{{ route('form_editar_producto', $producto) }}" method="get">
                            <input  style="width:100px;" type="submit" name="" value="Editar">
                          </form>
          			          </td>
          			          <td><form method="POST" action="{{ route('eliminar_producto', $producto) }}" onsubmit="return confirm('seguro')">{{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input  style="width:50px;" type="submit" name="" value="X">
                          </form>
                          </td>
                        </tr>
                        @empty
                  		<tr><td>No hay productos</td></tr>
                  	@endforelse
                  </table>
                </div>

              </div>
            </div>

              {{ $productos->links() }}

            @endsection

          @section('footer')
            @parent
          @endsection
