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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/items', 'ItemController@index')->name('items');
Route::get('/item/create', 'ItemController@create')->name('item');
Route::post('/item/store', 'ItemController@store')->name('item');
Route::get('/item/{id}/edit', 'ItemController@edit')->name('item');
Route::patch('/item/update', 'ItemController@update')->name('item');
Route::get('/item/show', 'ItemController@show')->name('item');
Route::get('/item/destroy', 'ItemController@destroy')->name('item');

Route::get('/edit/', [ 'as' => 'users.edit', 'uses' => 'UserController@edit']);