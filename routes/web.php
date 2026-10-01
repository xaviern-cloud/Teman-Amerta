<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\starter;
use App\Http\Controllers\ProductController;

Route::get('/teman_amerta/starter', [starter::class, 'relay']);


// 1. Route untuk menampilkan halaman form Register
Route::get('/register', function () {
    return view('regist_page');
})->name('register');

// 2. Route untuk memproses submit form Register
Route::post('/register', [AuthController::class, 'register']);

// 3. Route halaman utama (tujuan setelah Register sukses)
Route::get('/', function () {

    if (Auth::check()) {
        $user = Auth::user();
        return "Berhasil Register! Selamat datang, " . $user->nama;
    }
    return "Kamu belum Register. <a href='/login'>Klik di sini untuk Login</a>";
});

// 1. Route untuk menampilkan halaman form login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// 2. Route untuk memproses submit form login
Route::post('/login', [AuthController::class, 'login']);

// 3. Route halaman utama (tujuan setelah login sukses)
Route::get('/', function () {

    if (Auth::check()) {
        $user = Auth::user();
        return view('dashboard');
    }
    return "Kamu belum login. <a href='/login'>Klik di sini untuk Login</a>";
});

// 4. Route Logout (jika ingin mencoba logout)
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/lacak_pesanan', function () {
    return view('lacak_pesanan');
})->name('lacak_pesanan');

Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');

Route::get('/panduan_buku_fakultas', function () {
    return view('panduan_buku_fakultas');
})->name('panduan_buku_fakultas');
