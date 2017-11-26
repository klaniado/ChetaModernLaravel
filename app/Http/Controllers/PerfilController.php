<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function infoUsuario()
    {
      $usuario=Auth::user();
      return $usuario;

  }
}
