<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quater extends Model
{
    protected $guarded = [];

    public function city(){
        $this->belongsTo('App\City');
    }
}
