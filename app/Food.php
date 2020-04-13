<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function addanimal()
    {
        return $this->hasMany('App\Addanimal');
    }
    public function animalfood()
    {
        return $this->hasMany('App\Animalfood');
    }
}
