<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function users(){
        return $this->hasMany('App\User');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
