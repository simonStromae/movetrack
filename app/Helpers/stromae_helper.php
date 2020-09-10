<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('show_avatar')){
    function show_avatar():string{
        $avatar = Auth::user()->avatar;

        return !empty ($avatar) ? $avatar : "/front-office/brand/avatars/default.jpg";
    }
}

if (!function_exists('show_name_user')){
    function show_name_user():string{
        return Auth::user()->name;
    }
}
