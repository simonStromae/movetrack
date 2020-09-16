<?php

use App\User;
use Illuminate\Support\Facades\Auth;

if(!function_exists('show_avatar')){
    function show_avatar():string{
        $avatar = Auth::user()->avatar;

        return !empty ($avatar) ? asset('storage').'/images/avatars/'.$avatar : "/front-office/brand/avatars/default.jpg";
    }
}

if(!function_exists('show_trackImage')){
    function show_trackImage($imagename):string{
        return asset('storage').'/images/tracks/'.$imagename;
    }
}
if(!function_exists('emailExist')){
    function emailExist($email){
        return User::where('username', $email)->count() > 0;
    }
}


if (!function_exists('show_name_user')){
    function show_name_user():string{
        return Auth::user()->name;
    }
}

if (!function_exists('client')){
    function client(){
        return Auth::user()->client;
    }
}

if (!function_exists('client_tracks')){
    function client_tracks(){
        return client()->tracks->where('status', 'success');
    }
}

if(!function_exists('last_track_emit')){
    function last_track_emit(){
        return client()->tracks->where('status', 'emit');
    }
}

if(!function_exists('check')){
    function check(){
        return Auth::check();
    }
}

if(!function_exists('user')){
    function user(){
        return check() ? Auth::user() : false;
    }
}
