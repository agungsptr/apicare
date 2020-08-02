<?php

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

Route::view('/', 'documentation.index');
Route::view('/doc/user', 'documentation.user');
Route::view('/doc/customer', 'documentation.customer');
Route::view('/doc/car', 'documentation.car');
Route::view('/doc/rental', 'documentation.rental');