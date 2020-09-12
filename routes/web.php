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

        Route::layout('layouts.back-app')->group(function(){
            Route::livewire('/Tracks/','nkd.track.list-track')->name('backend.track.list');
            Route::livewire('/Tracks/Ajouter/{id_client}','nkd.track.create-track')->name('backend.track.create');
            Route::livewire('/Tracks/Modifier/{id}','nkd.track.edit-track')->name('backend.track.edit');

            Route::livewire('/Client/Tous-les-clients','nkd.client.client-list')->name('backend.client.list');
            Route::livewire('/Client/Ajouter','nkd.client.create-client')->name('backend.client.create');
            Route::livewire('/Client/Modifier/{id}','nkd.client.edit-client')->name('backend.client.edit');
            Route::livewire('/Client/{id}','nkd.client.show-client')->name('backend.show.edit');

            Route::livewire('/Categories/Tous-les-categories','nkd.category.list-category')->name('backend.category.list');
            Route::livewire('/Categories/Ajouter','nkd.category.create-category')->name('backend.category.create');
            Route::livewire('/Categories/Modifier/{id}','nkd.category.edit-category')->name('backend.category.edit');

        });
    });
});


/**
 * End Routes NKD
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
