<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'productos';
  protected $fillable = [
  'id',
  'name',
  'descripcion',
  'precio',
  'categorias_id',
  'images',
  'user_id'
  ];

  public function categoria()
  {
    return $this->belongsTo(Categoria::class, "categorias_id");
  }
  public function user()
  {
    return $this->belongsTo(User::class, "user_id");
  }
  public function images()
  {
    return $this->hasOne(Image::class, "images");
  }

}
