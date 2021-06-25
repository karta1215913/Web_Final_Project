<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('items', 'App\Http\Controllers\ItemController');

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/modify/user', 'App\Http\Controllers\Auth\UserController@modifyUser')->name('modify.user');
Route::post('/modify/user', 'App\Http\Controllers\Auth\UserController@modifyUserData')->name('modify.user.data');
Route::get('/modify/user/pwd', 'App\Http\Controllers\Auth\UserController@modifyUserPwd')->name('modify.user.pwd');
Route::post('/modify/user/pwd', 'App\Http\Controllers\Auth\UserController@modifyUserPwdData')->name('modify.user.pwd.data');
Route::get('/delete/user', 'App\Http\Controllers\Auth\UserController@deleteUser')->name('delete.user');
Route::post('/delete/user', 'App\Http\Controllers\Auth\UserController@deleteUserData')->name('delete.user.data');
