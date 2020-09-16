<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'Admin',
            'username' => 'admin@admin.fr',
            'password' => \Illuminate\Support\Facades\Hash::make('root'),
            'role_id' => \App\Role::where('name', 'admin')->first()->id
        ]);
    }
}
