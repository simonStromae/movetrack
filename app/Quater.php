<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quater extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function city(){
        return $this->belongsTo('App\City');
    }
}
