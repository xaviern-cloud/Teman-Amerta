<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function register (RegisterRequest $request) {
        $user = Pengguna::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'role' => 'customer'
        ]);
    }

    public function login (LoginRequest $request) {
        $credentials = $request->validated() ;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }
        return back() ->withErrors([
            'email' => 'Email atau Password anda Salah',
        ]);
    }

    public function logout (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

