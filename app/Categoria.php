<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categorias';

    protected $fillable=[
      'name',
      'images'
      // 'remember_token'
  ];

    public function productos()
    {
      return $this->hasMany(Product::class, "categorias_id");
    }
    public function images()
    {
      return $this->hasOne(Image::class, "images");
    }
}
