<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    protected $table = "faq";

    public function faqCategory(){
        return $this->belongsTo('App\Faq_category', 'faq_categories_id');
    }
}
