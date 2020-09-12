<?php


namespace App\Service\Nkd;


class ClientService
{
    public static function validate(){
        return
            [
                'name'     => 'required|string|min:3',
                'username' => 'required|string|unique:users',
                'password' => 'required|min:3',
                'quater_id'=> 'required',

            ];
    }
}
