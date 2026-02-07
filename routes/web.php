<?php

use App\Http\Controllers\KacangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KacangController::class, 'home'])->name('home');
Route::get('/produk', [KacangController::class, 'produk'])->name('produk');
Route::get('/about', [KacangController::class, 'about'])->name('about');
Route::get('/kontak', [KacangController::class, 'kontak'])->name('kontak');
Route::get('/anggota', [KacangController::class, 'anggota'])->name('anggota');
