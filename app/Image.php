<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['src'];

    public function product()
    {
      return $this->belongsTo(Product::class,'images');
    }
    public function user()
    {
      return $this->belongsTo(User::class,'images');
    }
    public function categoria()
    {
      return $this->belongsTo(Categoria::class,'images');
    }
}
