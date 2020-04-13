<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addanimal extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function medicine()
    {
        return $this->belongsTo('App\Medicine');
    }
    public function food()
    {
        return $this->belongsTo('App\Food');
    }
    public function feedfood()
    {
        return $this->hasMany('App\Feedfood');
    }
    public function feedmedicine()
    {
        return $this->hasMany('App\Feedmedicine');
    }
}
