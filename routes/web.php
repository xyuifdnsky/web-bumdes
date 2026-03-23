<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC AREA (Bisa diakses tanpa login)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('index');
})->name('index');

// Rute Produk untuk Pengunjung Umum (Halaman Skeleton/Katalog)
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');


/*
|--------------------------------------------------------------------------
| GUEST AREA (Hanya bisa diakses jika BELUM login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::view('/register/mitra', 'auth.register-mitra')->name('register.mitra');
    Route::post('/register/mitra', [GoogleController::class, 'storeMitra'])->name('mitra.store');

    // Google Login
    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
});


/*
|--------------------------------------------------------------------------
| AUTH AREA (Harus Login & Terverifikasi)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Pengaturan Profil Umum
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    // 1. ROLE: ADMIN
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });

    // 2. ROLE: KEPALA BUMDES
    Route::middleware(['role:kepala'])->prefix('kepala')->group(function () {
        Route::get('/dashboard', function () {
            return view('kepala.dashboard');
        })->name('kepala.dashboard');
    });

    // 3. ROLE: MITRA (Penjual)
    Route::middleware(['role:mitra'])->prefix('mitra')->group(function () {
        Route::get('/dashboard', function () {
            return view('mitra.dashboard');
        })->name('dashboard');

        // Nama rute diubah agar tidak bentrok dengan rute publik
        Route::get('/kelola-produk', function() {
            return view('mitra.produk.index');
        })->name('mitra.produk.index');
    });

    // 4. ROLE: CUSTOMER (Default pembeli)
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/orders', function () {
            return view('customer.orders');
        })->name('customer.orders');
    });
});

require __DIR__.'/auth.php';
