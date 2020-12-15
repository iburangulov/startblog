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

Route::view('/', 'home')->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'UserController@login');
    Route::post('/login', 'UserController@login_');
    Route::get('/register', 'UserController@register');
    Route::post('/register', 'UserController@register_');
});
Route::get('/logout', ['middleware' => 'auth', 'UserController@logout']);

Route::group(['prefix' => 'admin'], function () {

});
