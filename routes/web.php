<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication section
Route::get('/login',[AuthController::class,'view_login'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('auth.login');

Route::get('/register',[AuthController::class,'register'])->name('register');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');
