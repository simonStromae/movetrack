<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function user(){
        return $this->hasOne('App\User');
    }

    public function tracks(){
        return $this->hasMany('App\Track');
    }
}
