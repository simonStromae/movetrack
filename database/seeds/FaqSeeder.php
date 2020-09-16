<?php

use App\Faq;
use App\Faq_category;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::insert([
           [
               'question' => "question 1",
               'response' => "  Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.",
               'faq_categories_id' => Faq_category::where('name', 'Suivi')->first()->id
           ],
            [
                'question' => "question 1",
                'response' => "  Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird.",
                'faq_categories_id' => Faq_category::where('name', 'Expédition')->first()->id
            ]
        ]);
    }
}
