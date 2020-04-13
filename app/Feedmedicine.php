<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedmedicine extends Model
{
           public function addanimal()
    {
        return $this->belongsTo('App\Addanimal');
    }
}
