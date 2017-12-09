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
      $productos = Product::paginate(15);
      return view('productos', compact('productos','categorias'));
    }
    public function nuevoProducto()
    {

        $categorias = Categoria::all();
        return view('crearproducto', compact('categorias'));


    }
    public function crearNuevoProducto(Request $request)
    {
      Product::create($request->all());
      return redirect('http://localhost:8000/productos');
    }
    public function mostrarProducto($id)
    {
      $producto = Product::all()->where('id',$id);
      return view('/producto',compact('producto'));
    }
}
