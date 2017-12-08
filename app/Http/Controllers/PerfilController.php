<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function infoUsuario()
    {
      $usuario = Auth::user();
      return view('perfil',compact('usuario'));

  }
  public function perfilDeUsuario()
  {
    $usuario = Auth::user();
    return view('perfilDeUsuario',compact('usuario'));

  }
}
