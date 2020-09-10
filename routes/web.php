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

/*
|--------------------------------------------------------------------------
| STROMAE ROUTES
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome')->name('welcome');

Route::view('/livraison-expedition', 'pages.about')->name('about');

Route::view('/contact', 'pages.contact')->name('contact');

Route::namespace('Stromae')->group(function(){
    Route::get('/add-track', 'TrackingController@addTrack')->name('add-track');
    Route::get('/add-track/{id}/edit', 'TrackingController@editTrack')->name('edit-track');

    Route::prefix('/track-{id}')->group(function(){
        Route::get('/customer-information', 'TrackingController@checkout')->name('checkout');
        Route::get('/summary', 'TrackingController@summary')->name('recap');
        Route::get('/finish', 'TrackingController@finish')->name('finish');
    });

    Route::get('/my-account', 'ProfileController@account')->name('my-account');
});

/*
|--------------------------------------------------------------------------
| END STROMAE ROUTES
|--------------------------------------------------------------------------
*/


//page d'erreurs
Route::fallback(function (){
    return view('errors.404');
});

Route::view('error_503', 'errors.503')->name('error-503');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
