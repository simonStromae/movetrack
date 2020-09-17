<?php

namespace App\Http\Controllers\Stromae;

use App\Faq;
use App\Faq_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index($id = null){
        $faq_categories = Faq_category::all();

        if (is_null($id)){
            $id = Faq_category::firstOrFail()->id;
        }else{
            $id = Faq_category::findOrFail($id)->id;
        }

        $faqs = Faq::where('faq_categories_id', $id)->get();

        return view('pages.stromae.faq', compact('faq_categories', 'faqs'));
    }
}
