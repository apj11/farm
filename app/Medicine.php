<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function addanimal()
    {
        return $this->hasMany('App\Addanimal');
    }
    public function animalmedicine()
    {
        return $this->belongsToMany('App\Animalmedicine');
    }
    public function sell()
    {
        return $this->belongsToMany('App\Sell');
    }
}
