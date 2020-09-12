<?php


    if(!function_exists('getUser')){
        function getUser(\App\Client $client):\App\User{
            $user = \App\User::where('client_id', $client->id)->first();
            return  $user ;
        }
    }
