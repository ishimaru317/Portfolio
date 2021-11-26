<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantPlace extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    
    public function Place()
    {
        return $this->belongsTo('App\Place');
    }
}
