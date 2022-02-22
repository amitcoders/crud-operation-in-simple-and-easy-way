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

Route::get('/products','ProductController@index')->name('products');
Route::get('/products/create','ProductController@create')->name('products.create');
Route::post('/products/create','ProductController@store')->name('products.store');
Route::get('/products/edit/{id}','ProductController@edit')->name('products.edit');
Route::post('/products/update','ProductController@update')->name('products.update');
Route::get('/products/delete{id}','ProductController@delete')->name('products.delete');

