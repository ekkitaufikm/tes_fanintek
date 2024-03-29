<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'Auth\LoginController')->name('/');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('users')->group(function(){
        Route::get('/', 'UsersController@index')->name('users');
        Route::get('/create', 'UsersController@create')->name('users.create');
        Route::get('/edit/{id}', 'UsersController@edit')->name('users.edit');
    });
});
