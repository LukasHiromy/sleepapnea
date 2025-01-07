<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Dokter\DokterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Pasien\PasienController;

Route::get('/', [FrontController::class, 'showIndex'])->name('index');

// Authentication Routes
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login']);

Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserAuthController::class, 'register']);

Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

Route::middleware(['role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['role:Dokter'])->group(function () {
    Route::get('/dokter/dashboard', [DokterController::class, 'index'])->name('dokter.dashboard');
});

Route::middleware(['role:Pasien'])->group(function () {
    Route::get('/pasien/dashboard', [PasienController::class, 'index'])->name('pasien.dashboard');
});