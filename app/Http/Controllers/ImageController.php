<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
  public function imagesSave(Request $request)
  {
    $file = $request->file('images');
    $ext = $file->extension();
    $name = uniqid();
    $file->storeAs($product->name.'.'.$ext);
    $image = new \App\Image(['src' => $product->name.'.'.$ext]);
    $product->images()->save($image);
  }
}
