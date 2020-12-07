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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', 'App\Http\Controllers\ebookController@master');
Route::get('/nav', 'App\Http\Controllers\ebookController@nav');
Route::get('/about', 'App\Http\Controllers\ebookController@about');
Route::get('/list', 'App\Http\Controllers\ebookController@list');


