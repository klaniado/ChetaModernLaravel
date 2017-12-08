<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/preguntasfrecuentes', function () {
    return view('indexpregfrec');
});
Route::get('/index', function() {
  return view('index');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/perfil', 'PerfilController@infoUsuario');

Route::get('/perfilDeUsuario', 'PerfilController@perfilDeUsuario');

Auth::routes();

Route::get('/productos','ProductosController@index');

Route::get('/productos/crear','ProductosController@nuevoProducto');

Route::post('/productos/crear','ProductosController@crearNuevoProducto');

Route::get('/categorias','CategoriasController@index');

Route::get('/categoria/{id}','CategoriasController@traerProductosDeLaCategoria');
