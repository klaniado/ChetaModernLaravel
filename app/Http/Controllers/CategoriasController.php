<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Product;

class CategoriasController extends Controller {

public function index() {
    $categorias=Categoria::all();
    return view('/categorias', compact('categorias'));
    }
public function traerProductosDeLaCategoria($id) {
    $productos=Product::all()->where('categorias_id',$id);
    return view('/productosporcategoria', compact('productos'));
  }
}
