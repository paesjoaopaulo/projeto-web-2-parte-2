<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function album(){
        return $this->belongsTo('App\Album');
    }
}
