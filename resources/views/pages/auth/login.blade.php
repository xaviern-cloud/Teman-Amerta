<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — TemanAmerta</title>

    {{-- 1. IMPORT GOOGLE FONTS LANGSUNG LEWAT CSS --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Syne:wght@700;800&display=swap');

        /* Paksa Font Teraplikasi Secara Murni */
        body, input, button, label, span, p, a {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
        }

        .font-syne {
            font-family: 'Syne', sans-serif !important;
        }

        .font-jakarta {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
        }

        [x-cloak] { display: none !important; }
    </style>

    {{-- Vite menjadi satu-satunya entry point styling aplikasi. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full bg-[#FBF9F5] text-[#001D54] antialiased flex flex-col justify-between font-jakarta">

    {{-- Top Header Minimalis --}}
    <header class="w-full px-6 py-4 flex items-center justify-between max-w-6xl mx-auto">
        <a href="/" class="font-syne font-extrabold text-xl text-[#001D54] tracking-tight">
            Teman<span class="text-[#A43369]">Amerta</span>
        </a>
        <a href="{{ route('catalog.index') }}" class="text-xs font-bold text-[#444650] hover:text-[#001D54] flex items-center gap-1 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            <span>Katalog</span>
        </a>
    </header>

    {{-- Main Container Centered --}}
    <main class="grow flex items-center justify-center p-4 sm:p-6">
        <div class="w-full max-w-[420px] space-y-4">

            {{-- Breadcrumbs --}}
            <div class="flex items-center gap-1.5 text-[11px] font-extrabold uppercase tracking-wider text-[#757781]">
                <a href="/" class="hover:text-[#001D54]">Beranda</a>
                <span>/</span>
                <span class="text-[#001D54]">Masuk Akun</span>
            </div>

            {{-- Card Auth --}}
            <div class="bg-white rounded-2xl border-2 border-[#001D54] shadow-[5px_5px_0px_#001D54] p-6 sm:p-8 space-y-6">
                
                {{-- Header Section dengan Font Syne --}}
                <div class="space-y-2">
                    <div class="inline-flex items-center gap-2 bg-[#001D54] text-white text-[10px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full shadow-[2px_2px_0px_#001D54]">
                        <span class="w-2 h-2 rounded-full bg-[#FFE259]"></span>
                        <span>PORTAL KSATRIA AIRLANGGA</span>
                    </div>

                    <h1 class="font-syne text-2xl sm:text-3xl font-extrabold text-[#001D54] leading-tight pt-1">
                        Masuk ke TemanAmerta
                    </h1>

                    <p class="text-xs sm:text-sm font-semibold text-[#444650]">
                        Pantau pesanan & kebutuhan AMERTA-mu dalam satu portal.
                    </p>
                </div>

                {{-- Form Login --}}
                <form action="/login" method="POST" class="space-y-4">
                    @csrf

                    {{-- Field Email --}}
                    <div class="space-y-1">
                        <div class="flex justify-between items-center">
                            <label for="email" class="text-xs font-extrabold text-[#001D54] uppercase tracking-wider">
                                Email
                            </label>
                            <span class="text-[10px] font-semibold text-[#757781]">Wajib diisi</span>
                        </div>
                        <div class="relative flex items-center">
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                placeholder="nama@student.unair.ac.id" 
                                required 
                                value="{{ old('email') }}"
                                class="w-full bg-white border-2 border-[#001D54] rounded-xl pl-10 pr-3 py-2.5 text-xs font-bold text-[#001D54] placeholder-[#757781]/60 shadow-[2px_2px_0px_#001D54] focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all"
                            >
                            <div class="absolute left-3 text-[#444650]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Field Password --}}
                    <div class="space-y-1" x-data="{ show: false }">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-xs font-extrabold text-[#001D54] uppercase tracking-wider">
                                Kata Sandi
                            </label>
                            <span class="text-[11px] font-extrabold text-[#757781]">Lupa sandi? Segera hadir</span>
                        </div>
                        <div class="relative flex items-center">
                            <input 
                                :type="show ? 'text' : 'password'" 
                                name="password" 
                                id="password" 
                                placeholder="Masukkan kata sandi" 
                                required 
                                class="w-full bg-white border-2 border-[#001D54] rounded-xl pl-10 pr-10 py-2.5 text-xs font-bold text-[#001D54] placeholder-[#757781]/60 shadow-[2px_2px_0px_#001D54] focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all"
                            >
                            <div class="absolute left-3 text-[#444650]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </div>
                            <button type="button" @click="show = !show" class="absolute right-3 text-[#444650] hover:text-[#001D54]">
                                <svg x-show="!show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <svg x-show="show" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.025 10.025 0 013.682-.821c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-2.19 3.558M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18"/></svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center gap-2 pt-0.5">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            class="w-3.5 h-3.5 rounded border-2 border-[#001D54] text-[#A43369] focus:ring-0 cursor-pointer accent-[#A43369]"
                        >
                        <label for="remember" class="text-xs font-bold text-[#001D54] cursor-pointer">
                            Ingat saya di perangkat ini
                        </label>
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="w-full bg-[#A43369] hover:bg-[#8d2a58] text-white font-extrabold text-sm py-3 px-4 rounded-xl border-2 border-[#001D54] shadow-[3px_3px_0px_#001D54] flex items-center justify-center gap-2 transition-all active:translate-x-[2px] active:translate-y-[2px] active:shadow-none">
                        <span>Masuk ke Akun</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </form>

                {{-- Box Register --}}
                <div class="bg-[#F5F3EF] border-2 border-[#001D54] shadow-[2px_2px_0px_#001D54] rounded-xl p-3 text-center text-xs">
                    <span class="font-semibold text-[#444650]">Belum punya akun?</span>
                    <a href="/register" class="font-extrabold text-[#001D54] underline hover:text-[#A43369] ml-1 inline-flex items-center gap-0.5">
                        <span>Daftar Sekarang</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                {{-- Security Badge --}}
                <div class="flex items-center justify-center gap-1.5 text-[11px] font-extrabold text-[#757781]">
                    <svg class="w-3.5 h-3.5 text-[#001D54]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>Sistem Terenkripsi & Aman</span>
                </div>

            </div>

        </div>
    </main>

    {{-- Footer Bar --}}
    <footer class="w-full py-4 text-center text-[11px] font-bold text-[#757781]">
        © TemanAmerta. Ksatria Airlangga.
    </footer>

</body>
</html>
