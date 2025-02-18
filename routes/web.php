<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// tambah middleware untuk pengecekatan status login user
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login/keluar', [LoginController::class, 'keluar'])->name('login.keluar');

Route::get('/users', function () {
    return view('users.user');
})->name('users')->middleware('auth');

Route::get('/mobil', function () {
    return view('mobil.index');
})->name('mobil')->middleware('auth');
