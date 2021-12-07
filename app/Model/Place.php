<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
   public function Post()
    {
        return $this->hasMany('App\Post');
    }
    
    public function WantPlace()
    {
        return $this->hasMany('App\WantPlace');
    }
}
