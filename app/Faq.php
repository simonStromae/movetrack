<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function faqCategory(){
        return $this->belongsTo('App\Faq_category');
    }
}
