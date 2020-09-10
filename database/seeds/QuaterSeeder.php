<?php

use App\Quater;
use Illuminate\Database\Seeder;

class QuaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quater::insert([
            [
                'name' => 'Bepanda',
                'slug' => 'BEP',
                'city_id' => \App\City::where('slug', 'DLA')->first()->id
            ],
            [
                'name' => 'Bonamoussadi',
                'slug' => 'SADI',
                'city_id' => \App\City::where('slug', 'DLA')->first()->id
            ],
            [
                'name' => 'New-bell',
                'slug' => 'NB',
                'city_id' => \App\City::where('slug', 'DLA')->first()->id
            ]
        ]);
    }
}
