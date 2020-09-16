<?php

use App\Faq_category;
use Illuminate\Database\Seeder;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq_category::insert([
           [
               'name' => 'Suivi',
               'description' => ''
           ],
            [
                'name' => 'Expédition',
                'description' => ''
            ],
            [
                'name' => 'Livraison',
                'description' => ''
            ],
        ]);
    }
}
