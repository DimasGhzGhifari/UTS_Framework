<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;

// Halaman utama diarahkan ke welcome.blade.php
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute resource untuk CRUD Donasi
Route::resource('donasi', DonasiController::class);

// Rute tambahan untuk riwayat dan restore
Route::get('donasi-riwayat', [DonasiController::class, 'riwayat'])->name('donasi.riwayat');
Route::post('donasi/restore/{id}', [DonasiController::class, 'restore'])->name('donasi.restore');
