<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Jika belum login sama sekali
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // 2. Gunakan strtoupper agar aman untuk 'ADMIN', 'admin', maupun 'Admin'
        if (strtoupper(Auth::user()->peran) === 'ADMIN') {
            return $next($request);
        }

        // 3. Jika bukan ADMIN
        return response()->view('akses_ditolak', [], 403);
    }
}
