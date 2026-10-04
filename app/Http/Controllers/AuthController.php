<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function register(RegisterRequest $request)
    {
        $user = Pengguna::create([
            'nama'       => $request->nama,
            'email'      => $request->email,
            'no_hp'      => $request->no_hp,
            'peran'      => 'customer', // Diambil dari pilihan form
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
    }


    public function login(LoginRequest $request)
{
    $credentials = $request->validated();

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $user = Auth::user();

        // Menggunakan strtoupper agar cocok dengan nilai 'ADMIN' di Seeder/Database
        if (strtoupper($user->peran) === 'ADMIN') {
            return redirect('/admin/dashboard');
        }

        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'Email atau Password anda Salah',
    ])->onlyInput('email');
}
    public function logout (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}

