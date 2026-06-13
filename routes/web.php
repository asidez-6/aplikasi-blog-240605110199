<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\KategoriArtikelController;
use App\Http\Controllers\BlogController;


// Route Publik (tanpa middleware auth)

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'detail'])->name('blog.detail');


// Route Login & Logout

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'proses'])
    ->name('login.proses')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')->middleware('auth');


// Route CMS (dilindungi middleware auth)

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('artikel', ArtikelController::class)->except(['show']);
    Route::resource('penulis', PenulisController::class)->except(['show']);
    Route::resource('kategori', KategoriArtikelController::class)->except(['show']);
});