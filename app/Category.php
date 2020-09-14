<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $guarded = [];
    public $timestamps= false;
    public function tracks(){
        return $this->hasMany('App\Track');
    }
}
