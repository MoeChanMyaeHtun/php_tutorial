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
Route::get('/user/search', 'User\UserController@searchUsers')->name('user.search');
Route::get('/user/mail', [MailController::class, 'mailView'])->name('user.mailView');
Route::post('/user/send-mail', [MailController::class, 'mailSend'])->name('user.mailSend');

Route::get('/language','Language\LanguageController@showLanguageList')->name('language.index');
Route::get('/language/create', 'Language\LanguageController@showCreateLanguageView')->name('language.create');
Route::post('/language/create','Language\LanguageController@submitCreateLanguageView')->name('language.store');


Route::get('/language/edit/{id}', 'Language\LanguageController@showEditLanguageView')->name('language.edit');
Route::post('/language/edit/{id}','Language\LanguageController@submitEditLanguageView')->name('language.update');

Route::get('/language/delete/{id}','Language\LanguageController@deleteLanguage')->name('language.delete');



