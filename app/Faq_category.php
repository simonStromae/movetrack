<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq_category extends Model
{
    protected $table = "faq_categories";

    public $timestamps = false;

    protected $guarded = [];

    public function faqs(){
        return $this->hasMany('App\Faq', 'faq_categories_id');
    }
}
