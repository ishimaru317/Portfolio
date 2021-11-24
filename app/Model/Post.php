<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Place()
        {
            return $this->belongsToMany('App\Place');
        }
}
