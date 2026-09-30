<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/stecu/artery', [AuthController::class, 'artery']);
Route::get('/stecu/vena', [AuthController::class, 'vena']);
Route::get('/stecu/{nama}', [AuthController::class, 'nama_pengguna']);

