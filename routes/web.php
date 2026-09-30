<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\starter;

Route::get('/teman_amerta/register', [AuthController::class, 'register']);
Route::get('/teman_amerta/starter', [starter::class, 'relay']);

// 1. Route untuk menampilkan halaman form login
Route::get('/login', function () {
    return view('login_page');
})->name('login');

// 2. Route untuk memproses submit form login
Route::post('/login', [AuthController::class, 'login']);

// 3. Route halaman utama (tujuan setelah login sukses)
Route::get('/', function () {

    if (Auth::check()) {
        $user = Auth::user();
        return "Berhasil Login! Selamat datang, " . $user->nama;
    }
    return "Kamu belum login. <a href='/login'>Klik di sini untuk Login</a>";
});

// 4. Route Logout (jika ingin mencoba logout)
Route::post('/logout', [AuthController::class, 'logout']);
