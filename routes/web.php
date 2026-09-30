<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\starter;

Route::get('/teman_amerta/register', [AuthController::class, 'register']);
Route::get('/teman_amerta/starter', [starter::class, 'relay']);
Route::get('/stecu/{nama}', [AuthController::class, 'nama_pengguna']);

