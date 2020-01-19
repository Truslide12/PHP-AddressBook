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
    return view('contacts');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Blade Routes
Route::get('/search', 'ContactController@search')->name('contacts.search');
Route::get('/createAddress', 'ContactController@createAddress')->name('contacts.createAddress');
Route::post('/storeAddress/{contact_id}', 'AddressController@store')->name('addresses.store');
// Route::get('/show', 'ContactController@show')->name('contacts.show');
Route::get('/edit', 'ContactController@edit')->name('contacts.edit');

// get id for address function
// Route::get('createAddress/{id}', ['as'=>'id','uses'=>'AddressController@store'])->name('contacts.createAddress');
// Route::get('/map', 'ContactController@map')->name('map');

// MySQL data routes
Route::resource('contacts', 'ContactController');
Route::resource('addresses', 'AddressController');