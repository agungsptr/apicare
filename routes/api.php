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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@show');
    Route::post('/', 'UserController@store');
    Route::put('/{id}', 'UserController@update');
    Route::delete('/{id}', 'UserController@delete');
});

Route::group(['prefix' => 'car'], function () {
    Route::get('/', 'CarController@index');
    Route::get('/{id}', 'CarController@show');
    Route::post('/', 'CarController@store');
    Route::put('/{id}', 'CarController@update');
    Route::delete('/{id}', 'CarController@delete');
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/', 'CustomerController@index');
    Route::get('/{id}', 'CustomerController@show');
    Route::post('/', 'CustomerController@store');
    Route::put('/{id}', 'CustomerController@update');
    Route::delete('/{id}', 'CustomerController@delete');
});

Route::group(['prefix' => 'rental'], function () {
    Route::get('/', 'RentalController@index');
    Route::get('/{id}', 'RentalController@show');
    Route::post('/', 'RentalController@store');
    Route::put('/{id}', 'RentalController@update');
    Route::delete('/{id}', 'RentalController@delete');
});

