<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\starter;
use App\Http\Middleware\IsAdmin; // Import middleware IsAdmin

/*
|--------------------------------------------------------------------------
| 1. ROUTE PUBLIK / UMUM
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/pesanan', function () {
    return view('pages.order.track');
})->name('home.pesanan');

Route::get('/katalog', [ProductController::class, 'index'])->name('pages.catalog.index');

Route::get('/panduan_buku_fakultas', function () {
    return view('panduan_buku_fakultas');
})->name('panduan_buku_fakultas');

Route::get('/teman_amerta/starter', [starter::class, 'relay']);


/*
|--------------------------------------------------------------------------
| 2. ROUTE AUTHENTICATION (Custom AuthController)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    // Tampilan Form
    Route::get('/login', function () {
        return view('pages.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('pages.auth.register');
    })->name('register');

    // Proses Form (Diabaikan dari Breeze, diarahkan ke AuthController Anda)
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


/*
|--------------------------------------------------------------------------
| 3. ROUTE AUTHENTICATED (Wajib Login - Peran Customer & Admin)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard User Biasa
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/lacak_pesanan', function () {
        return view('lacak_pesanan');
    })->name('lacak_pesanan');

    Route::get('/cart', function () {
        return view('pages.cart.index');
    })->name('cart.index');

    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | 4. ROUTE KHUSUS ADMIN (Wajib Login & Peran ADMIN)
    |--------------------------------------------------------------------------
    */
    Route::middleware([IsAdmin::class])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard'); // Pastikan file blade ada di resources/views/admin/dashboard.blade.php
        })->name('admin.dashboard');

        Route::get('/admin/pengguna', [ProfileController::class, 'index'])->name('admin.pengguna.index');
    });
});