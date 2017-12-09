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
  'images'
  ];

  public function categoria()
  {
    return $this->belongsTo(Categoria::class, "categorias_id");
  }

}
