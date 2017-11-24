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
  'remember_token'
  ];
}
