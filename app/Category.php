<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps= false;
    public function tracks(){
        $this->hasMany('App\Track');
    }
}
