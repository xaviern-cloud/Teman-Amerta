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
            'kata_sandi' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
    }


    public function login(LoginRequest $request) {
    // Mengambil data email dan password yang sudah lolos validasi
    $credentials = $request->validated();

    if (Auth::attempt($credentials)) {
        // Regenerasi session untuk mencegah serangan Session Fixation
        $request->session()->regenerate();
        $user = Auth::user();

        // 1. Redirect berdasarkan peran (Opsi B)
        if ($user->peran === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }
        // Default redirect untuk customer
        return redirect()->intended('/');
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

