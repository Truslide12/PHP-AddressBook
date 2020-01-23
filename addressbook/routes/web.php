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

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('contacts');
});

// Auth::routes();

// Blade Routes
Route::get('/edit', 'ContactController@edit')->name('contacts.edit');
Route::get('/createAddress', 'ContactController@createAddress')->name('contacts.createAddress');
Route::post('/storeAddress/{contact_id}', 'AddressController@store')->name('addresses.store');
Route::get('/search', 'ContactController@search')->name('contacts.search');
Route::get('/postSearch', 'ContactController@postSearch')->name('contacts.postSearch');
Route::get('/sort/{column}', 'ContactController@sort')->name('contacts.sort');
Route::get('/sortDesc/{column}', 'ContactController@sortDesc')->name('contacts.sortDesc');

// MySQL data routes
Route::resource('contacts', 'ContactController');
Route::resource('addresses', 'AddressController');