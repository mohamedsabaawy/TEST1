<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'API' , 'prefix'=>'v1'],function (){
    Route::post('/register','ClientController@register');
    Route::post('/login','ClientController@login'); ///api/v1/login
    Route::post('/city1','HotelController@city'); ///api/v1/city/
//    Route::post('/country1','HotelController@country'); ///api/v1/city/
    Route::post('/city','HotelController@apicity'); ///api/v1/city/
    Route::post('/country','HotelController@apicountry'); ///api/v1/city/

    Route::group(['middleware' => 'auth:api'],function (){
        Route::post('clients' ,'ClientController@index');
        Route::post('update' ,'ClientController@update');
        Route::post('hotel' ,'HotelController@index');
        Route::post('search' ,'HotelController@search');
        Route::post('landmark' ,'LandmarkController@index');
    });
});
