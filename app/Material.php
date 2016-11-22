<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['value'];

    public function product(){
      return this->belongsToMany('App\Product');
    }
}
