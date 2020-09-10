<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Welcome-page
Route::view('/', 'welcome')->name('welcome');

//DeliveryExpedition-page
Route::view('/livraison-expedition', 'pages.about')->name('about');

//Contact-page
Route::view('/contact', 'pages.contact')->name('contact');

//page d'erreurs
Route::fallback(function (){
    return view('errors.404');
});

Route::view('error_503', 'errors.503')->name('error-503');

Auth::routes();
Route::get('/my-account', 'Stromae\ProfileController@account')->name('my-account');

Route::get('/home', 'HomeController@index')->name('home');
