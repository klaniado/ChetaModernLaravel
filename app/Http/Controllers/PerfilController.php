<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function infoUsuario()
    {
      $usuario = Auth::user();
      return view('/perfil',compact('usuario'));

  }
  public function perfilDeUsuario()
  {
    $usuario = Auth::user();
    return view('/perfilDeUsuario',compact('usuario'));

  }
  public function mostrarFormEditarUsuario($id)
  {
    $usuario = Auth::user();
    return view('/editarForm',compact('usuario'));

  }
  public function guardarEdicion(Request $request)
  {
    $id = Auth::user()->id;
    DB::table('users')
            ->where('id', $id)
            ->update($request->all());
            return view('/perfilDeUsuario');

  }
}
