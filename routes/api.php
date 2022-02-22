<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Phone api route  webaccess
        Route::get('phone/index/{id}','Api\PhoneNumberApiController@getPhoneAccess')->name('phone.index');
        Route::post('phone/store','Api\PhoneNumberApiController@storePhone')->name('phone.store');
        Route::get('phone/edit/{id}','Api\PhoneNumberApiController@editPhone')->name('phone.edit');
        Route::post('phone/update','Api\PhoneNumberApiController@updatephone')->name('phone.update');
        Route::get('phone/destroy/{id}','Api\PhoneNumberApiController@destroyPhone')->name('destroy');
