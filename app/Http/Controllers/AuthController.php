<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function register (RegisterRequest $request) {
        $user = User::create([
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

    public function logout () {
        Auth::logout();

        return redirect('/');
    }
}

