<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [
                'name' => 'Douala',
                'slug' => 'DLA',
                'country_id' => \App\Country::where('slug', 'CMR')->first()->id
            ],
            [
                'name' => 'Yaoundé',
                'slug' => 'YDE',
                'country_id' => \App\Country::where('slug', 'CMR')->first()->id
            ],
            [
                'name' => 'Bafoussam',
                'slug' => 'BAF',
                'countries_id' => \App\Country::where('slug', 'CMR')->first()->id
            ]
        ]);

    }
}
