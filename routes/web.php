<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
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

Route::middleware('is_buyer')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/buyed-items',[ItemController::class,'show_buyed_items'])->name('buyed.items');
    Route::post('/buyer/add-item',[ItemController::class,'add'])->name('buyer.addItem');
});

// Authentication section
Route::get('/login',[AuthController::class,'view_login'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('auth.login');

Route::get('/register',[AuthController::class,'register'])->name('register');

Route::get('/unauthorize',[AuthController::class,'unauthorized'])->name('unauthorize');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');
