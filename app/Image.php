<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['src'];

    public function product(){
      return this->belongsTo('App\Product');
    }
}
