<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Categoria;
use App\Image;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    public function index()
    {
      $categorias = Categoria::all();
      $productos = Product::paginate(15);
      return view('/productos', compact('productos','categorias'));
    }
    public function nuevoProducto()
    {

        $categorias = Categoria::all();
        return view('crearproducto', compact('categorias'));


    }

    public function crearNuevoProducto(Request $request)
    {
      $producto = Product::create($request->all());
                  $file = $request->file('images');
                  $ext = $file->extension();
                  $name = $request->name;
                  $id = $request->id;
                  $archivo = '$id.$name.".".$ext';
                  Storage::put('storage/products/',$archivo);
                  $image = new Image(['src' => $id.$name.'.'.$ext]);
                  $producto->images=$image;
      return redirect('/productos');
    }
    public function mostrarProducto($id)
    {
      $producto = Product::all()->where('id',$id);
      return view('/producto', compact('producto'));
    }

    public function eliminar($id)
        {
            $producto = Product::findOrFail($id);
            $producto->delete();
            return redirect('/productos');
        }
        public function mostrarFormEditar($id)
        {

          $categorias = Categoria::all();
          $producto = Product::findOrFail($id);
          return view('form_editar_producto', compact('producto', 'categorias'));
}





        public function editar($id, Request $request)
        {
            $this->validate(
                $request,
                [
                    'name' => 'required',
                    'precio' => 'required'

                ],
                [
                    'name.required' => 'Ponele nombre a tu producto.',
                    'precio.required' => 'Le tenes que poner el precio.'

                ]
            );
            $producto = Product::findOrFail($id);
            $producto->fill($request->all());
            $producto->save();
            return redirect('/productos');
        }

}
