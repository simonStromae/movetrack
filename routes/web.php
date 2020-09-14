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

/**
 * Route nkd
 */


Route::namespace('Nkd\Backend')->prefix('admin-track')->group(function(){
    Route::view('/login','pages.nkd.login')->name('backend.login');
    Route::post('/logout','LoginController@logout')->name('backend.logout');
    Route::post('/connexion','LoginController@authenticate')->name('backend.connexion');

    Route::middleware('admin.auth')->group(function(){
        Route::view('/tableau-de-bord','pages.nkd.dashboard')->name('backend.dashboard');
        Route::delete('/Client/{id}','ClientController@destroy')->name('backend.client.destroy');
        Route::delete('/Track/{id}','TrackController@destroy')->name('backend.track.destroy');
        Route::delete('/Categorie/{id}','CategoryController@destroy')->name('backend.category.destroy');

        Route::delete('/Ville/{id}','LocationController@destroyCity')->name('backend.country.destroy');
        Route::delete('/Quatier/{id}','LocationController@destroyQuater')->name('backend.quater.destroy');
        Route::delete('/ville/{id}','LocationController@destroyCity')->name('backend.city.destroy');

        Route::layout('layouts.back-app')->group(function(){
            Route::livewire('/Tracks/','nkd.track.list-track')->name('backend.track.list');
            Route::livewire('/Tracks/Ajouter/{id_client}','nkd.track.create-track')->name('backend.track.create');
            Route::livewire('/Tracks/Modifier/{id}','nkd.track.edit-track')->name('backend.track.edit');

            Route::livewire('/Tracks/{id}','nkd.track.show-track')->name('backend.track.show');

            Route::livewire('/Client/Tous-les-clients','nkd.client.client-list')->name('backend.client.list');
            Route::livewire('/Client/Ajouter','nkd.client.create-client')->name('backend.client.create');
            Route::livewire('/Client/Modifier/{id}','nkd.client.edit-client')->name('backend.client.edit');
            Route::livewire('/Client/{id}','nkd.client.show-client')->name('backend.show.edit');

            Route::livewire('/Categories/Tous-les-categories','nkd.category.list-category')->name('backend.category.list');
            Route::livewire('/Categories/Ajouter','nkd.category.create-category')->name('backend.category.create');
            Route::livewire('/Categories/Modifier/{id}','nkd.category.edit-category')->name('backend.category.edit');

            Route::livewire('/Pays/Tous-les-Pays','nkd.country.list-country')->name('backend.country.list');
            Route::livewire('/Pays/Ajouter','nkd.country.create-country')->name('backend.country.create');
            Route::livewire('/Pays/Modifier/{id}','nkd.country.edit-country')->name('backend.country.edit');

            Route::livewire('/Villes/Tous-les-villes','nkd.city.list-city')->name('backend.city.list');
            Route::livewire('/Villes/Ajouter','nkd.city.create-city')->name('backend.city.create');
            Route::livewire('/Villes/Modifier/{id}','nkd.city.edit-city')->name('backend.city.edit');

            Route::livewire('/Quartier/Tous-les-quartier','nkd.quater.list-quater')->name('backend.quater.list');
            Route::livewire('/Quartier/Ajouter','nkd.quater.create-quater')->name('backend.quater.create');
            Route::livewire('/Quartier/Modifier/{id}','nkd.quater.edit-quater')->name('backend.quater.edit');

        });
    });
});


/**
 * End Routes NKD
 */

/*
|--------------------------------------------------------------------------
| START STROMAE ROUTES
|--------------------------------------------------------------------------
*/

//Welcome-page
Route::view('/', 'welcome')->name('welcome');

//DeliveryExpedition-page
Route::view('/livraison-expedition', 'pages.about')->name('about');

//Contact-page
Route::view('/contact', 'pages.contact')->name('contact');

Route::namespace('Stromae')->group(function(){
    Route::get('/add-track', 'TrackingController@addTrack')->name('add-track');
    Route::get('/add-track/{id}/edit', 'TrackingController@editTrack')->name('edit-track');

    Route::prefix('/track-{id}')->group(function(){
        Route::get('/customer-information', 'TrackingController@checkout')->name('checkout');
        Route::middleware('auth')->get('/summary', 'TrackingController@summary')->name('recap');
        Route::middleware('auth')->get('/finish', 'TrackingController@finish')->name('finish');
    });

    Route::get('/my-account', 'ProfileController@account')->name('my-account');

    Route::get('/reset/email', 'ForgotPasswordController@showLinkRequestForm')->name("reset.email");
    Route::post('/reset/email', 'ForgotPasswordController@validateEmailReset')->name("reset.email");

    Route::get('/reset/password', 'ForgotPasswordController@showResetForm')->name("reset.password");
    Route::post('/reset/password', 'ForgotPasswordController@updatePassword')->name("update.password");
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
Route::get('/my-account', 'Stromae\ProfileController@account')->name('my-account');

Route::get('/home', 'HomeController@index')->name('home');
