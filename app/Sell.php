<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function medicine()
    {
        return $this->belongsToMany('App\Medicine');
    }
}
