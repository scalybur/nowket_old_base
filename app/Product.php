<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['name', 'description', 'price', 'category_id', 'user_id'];

    public function category(){
      return this->belongsTo('App\Category');
    }

    public function user(){
      return this->belongsTo('App\User');
    }

    public function image(){
      return this->hasMany('App\Image');
    }

    public function material(){
      return this->belongsToMany('App\Material');
    }
}
