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

Route::get('/task','Task\TaskController@showTasklist')->name('task.index');
Route::post('/task/create','Task\TaskController@storeTasklist')->name('task.store');
Route::get('/task/edit/{id}', 'Task\TaskController@showEditTaskListView')->name('task.edit');
Route::post('/task/edit/{id}','Task\TaskController@updateTasklist')->name('task.update');
Route::get('/task/delete/{id}','Task\TaskController@deleteTask')->name('task.delete');
