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

Route::get('/user','User\UserController@showUserList')->name('user.index');
Route::get('/user/create', 'User\UserController@showCreateUserView')->name('user.create');
Route::post('/user/create','User\UserController@submitCreateUserView')->name('user.store');


Route::get('/user/edit/{id}', 'User\UserController@showEditUserView')->name('user.edit');
Route::post('/user/edit/{id}','User\UserController@submitEditUserView')->name('user.update');

Route::get('/user/delete/{id}','User\UserController@deleteUser')->name('user.delete');

Route::get('/user/export', 'User\UserController@exportUsers')->name('user.export');
Route::post('/user/import', 'User\UserController@importUsers')->name('user.import');

