<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Collecteur
Route::resource('collecteurs', 'CollecteurController');

// Erreurs
Route::resource('erreurs', 'ErreurController');

// Reclamation
Route::resource('reclamation', 'ReclamationController');
Route::get('traite', 'ReclamationController@traite')->name('traite');