<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller {

public function listar() {
    $categorias=categorias::all();
    return view('categorias', compact('categorias'));
    }
}
