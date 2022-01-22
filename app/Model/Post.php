<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function WantPlace()
    {
        return $this->belongsTo('App\WantPlace');
    }
    protected $fillable = [
        'name',
        'photo',
        'comment', 
        'category_id'
    ];
}
