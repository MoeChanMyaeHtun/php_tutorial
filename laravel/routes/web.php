<?php

use Illuminate\Support\Facades\Route;

Route::get('task', 'TaskController@index')->name('task.index');
Route::post('task/create', 'TaskController@store')->name('task.store');
Route::get('task/delete/{id}', 'TaskController@destroy')->name('task.destroy');
Route::get('task/edit/{id}', 'TaskController@edit')->name('task.edit');
Route::post('task/edit/{id}', 'TaskController@update')->name('task.update');
