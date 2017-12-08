<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'productos';
  protected $fillable = [
  'nombre',
  'descripcion',
  'precio',
  'remember_token',
  'categorias_id',
  ];

  public function categoria()
  {
    return $this->belongsTo(Categoria::class, "categorias_id");
  }
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
