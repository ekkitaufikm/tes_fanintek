<?php

use App\Http\Resources\UsersResources;
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
Route::prefix('users')->group(function(){
    Route::get('/', 'API\UsersController@index')->name('users');
    Route::post('/store', 'API\UsersController@store')->name('users.store');
    Route::post('/update/{id}', 'API\UsersController@update')->name('users.update');
})->middleware('auth:api');

//dataTable
Route::any('getTableUsers', 'DataTables\UsersDataTables@getTableUsers');