<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Categoria;

class ProductosController extends Controller
{
    public function index()
    {
      $categorias = Categoria::all();
      $productos = Product::all();
      return view('productos', compact('productos','categorias'));
    }
    public function nuevoProducto()
    {
          $categorias = Categoria::all();
          return view('crearproducto', compact('categorias'));
    }
    public function crearNuevoProducto(Request $request)
    {
      $producto = new Product ($request->all());
      return redirect('http://localhost:8000/productos');
    }
}
