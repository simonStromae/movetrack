<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded = [];
    public $timestamps =false;


    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }

    public function getBudgetAttribute($value){
        return "$value FCFA ";
    }
}
