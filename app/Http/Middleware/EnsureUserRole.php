<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // 1. Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // 2. Cek apakah peran pengguna sesuai dengan yang diminta route
        if (Auth::user()->peran !== $role) {
            abort(403, 'Akses Ditolak: Anda tidak memiliki wewenang membuka halaman ini.');
        }

        return $next($request);
    }
}
