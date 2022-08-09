<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/language','API\LanguageAPIController@showLanguageList');
Route::post('/language/create','API\LanguageAPIController@createLanguage');
Route::post('/language/edit/{id}','API\LanguageAPIController@editLanguage');
Route::delete('/language/delete/{id}', 'API\LanguageAPIController@deleteLanguage');

Route::get('/del', function(){
	App\Models\Language::truncate();
});