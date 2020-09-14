<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }

//    public function getBudgetAttribute($value){
//        return "$value FCFA ";
//    }
}
