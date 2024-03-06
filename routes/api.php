<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

//data users
Route::middleware('auth:api')->post('/users/store', 'UsersController@store');
Route::middleware('auth:api')->put('/users/update/{id}', 'UsersController@update');

//dataTable
Route::any('getTableUsers', 'DataTables\UsersDataTables@getTableUsers');