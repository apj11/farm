<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedfood extends Model
{
    public function addanimal()
    {
        return $this->hasMany('App\Addanimal');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
