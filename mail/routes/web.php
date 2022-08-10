<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('mail', [MailController::class, 'mailView'])->name('mailView');
Route::post('send-mail', [MailController::class, 'mailSend'])->name('mailSend');

Route::get('register/register', [RegisterController::class, 'register']);
Route::post('register/register', [RegisterController::class, 'store'])->name('register');

Route::get('student/login', [LoginController::class, 'login']);
Route::post('student/llogin', [LoginController::class, 'store'])->name('login');
Route::get('student/llogout', [LoginController::class, 'logout'])->name('logout');
Route::get('student/lhome', [LoginController::class, 'home'])->name('home');

Route::get('student/forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('student/forget-password', [ForgotPasswordController::class, 'postEmail']);