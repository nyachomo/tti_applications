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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addApplicant', [App\Http\Controllers\ApplicantController::class, 'addApplicant'])->name('addApplicant');
Route::get('/login', [App\Http\Controllers\ApplicantController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\ApplicantController::class, 'register'])->name('register');

