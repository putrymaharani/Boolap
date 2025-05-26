<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/welcomeuser', function () {
    return view('welcomeuser');
});

Route::get('/lapangan', [LapanganController::class, 'index']);

// Menampilkan halaman login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
// Proses login
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Menampilkan halaman register
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Proses register
Route::post('/register', [RegisteredUserController::class, 'store']);

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Dashboard setelah login
Route::get('/beranda', function () {
    return view('beranda');
})->middleware(['auth'])->name('beranda');

require __DIR__.'/auth.php';
