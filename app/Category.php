<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function medicine()
    {
        return $this->hasMany('App\Medicine');
    }
    public function addanimal()
    {
        return $this->hasMany('App\Addanimal');
    }
    public function food()
    {
        return $this->hasMany('App\Food');
    }
    public function feedfood()
    {
        return $this->hasMany('App\Feedfood');
    }
    public function sell()
    {
        return $this->hasMany('App\Sell');
    }
}
