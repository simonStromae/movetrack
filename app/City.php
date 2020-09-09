<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function quaters(){
        $this->hasMany('App\Quater');
    }

    public function country(){
        $this->belongsTo('App\Country');
    }
}
