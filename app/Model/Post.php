<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function WantPlace()
    {
        return $this->belongsTo('App\WantPlace');
    }
}
