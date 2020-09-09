<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded = [];

    public function category(){
        $this->belongsTo('App\Category');
    }

    public function images(){
        $this->hasMany('App\Image');
    }
}
