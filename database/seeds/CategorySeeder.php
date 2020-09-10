<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Electronique',
                'description' => ''
            ],
            [
                'name' => 'Vêtements',
                'description' => ''
            ],
            [
                'name' => 'Chaussures',
                'description' => ''
            ],
            [
                'name' => 'Produits Beauté',
                'description' => ''
            ]
        ]);
    }
}
