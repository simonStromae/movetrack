<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function quater(){
        $this->belongsTo('App\Quater');
    }

    public function user(){
        $this->belongsTo('App\User');
    }

    public function tracks(){
        $this->hasMany('App\Track');
    }
}
