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


Route::get('/register', 'RegisterController@create');
Route::get('/store', 'RegisterController@store');

Route::get('/login', 'LoginController@index');
Route::get('/shecklogin', 'LoginController@login');
//Route::get('/logout', 'LoginController@destroy');

