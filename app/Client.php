<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function quater(){
        return $this->belongsTo('App\Quater');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tracks(){
        return $this->hasMany('App\Track');
    }
}
