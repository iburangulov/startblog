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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/','AdminController@index');
    Route::resource('/posts', 'PostsController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'UserController@login');
    Route::post('/login', 'UserController@login_');
    Route::get('/register', 'UserController@register');
    Route::post('/register', 'UserController@register_');
});

Route::get('/logout', 'UserController@logout');

Route::group(['prefix' => 'admin'], function () {

});
