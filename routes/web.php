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



Route::get('/', '\App\Http\Controllers\CarController@index');
Route::get('/cars', '\App\Http\Controllers\CarController@index');
Route::get('/cars/index', '\App\Http\Controllers\CarController@index');

Route::get('/cars/create', '\App\Http\Controllers\CarController@create');

Route::post('/cars/store', '\App\Http\Controllers\CarController@store');
