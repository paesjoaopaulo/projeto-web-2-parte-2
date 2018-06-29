<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
