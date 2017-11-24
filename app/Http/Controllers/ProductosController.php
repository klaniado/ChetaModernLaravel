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

}
