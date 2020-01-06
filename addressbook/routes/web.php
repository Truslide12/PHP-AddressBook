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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Blade Routes
// Route::get('blade', function () {
//     return view('child');
Route::get('/search', 'ContactController@getSearch')->name('contacts.search');
// Route::get('/map', 'MapController@index')->name('map');

// MySQL data routes
Route::resource('contacts', 'ContactController');
Route::resource('addresses', 'AddressController');