<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun — TemanAmerta 2026</title>

    {{-- Import Google Fonts --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Syne:wght@700;800&display=swap');

        body, input, button, select, textarea, label, span, p, a {
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
<body class="min-h-full bg-[#FBF9F5] text-[#001D54] antialiased flex flex-col justify-between font-jakarta">

    {{-- ========================================== --}}
    {{-- HEADER FULL NAVBAR NEO-BRUTALISM --}}
    {{-- ========================================== --}}
    <header class="w-full bg-[#FBF9F5] border-b-2 border-[#153373] shadow-[0px_4px_0px_#153373] sticky top-0 z-50">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">
            
            {{-- Logo Brand --}}
            <a href="/" class="font-syne text-2xl font-extrabold text-[#001D54] tracking-tight hover:opacity-90 transition-opacity">
                Teman<span class="text-[#A43369]">Amerta</span>
            </a>

            {{-- Navigasi Kanan --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('pages.catalog.index') }}" class="text-xs sm:text-sm font-bold text-[#444650] hover:text-[#001D54] transition-colors flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    <span>Kembali ke Katalog</span>
                </a>

                {{-- Avatar Icon Box --}}
                <div class="w-9 h-9 bg-[#153373] rounded-full border-2 border-[#153373] shadow-[2px_2px_0px_#153373] flex items-center justify-center text-white shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>

        </div>
    </header>

    {{-- ========================================== --}}
    {{-- MAIN CONTAINER (SPLIT SCREEN LAYOUT) --}}
    {{-- ========================================== --}}
    <main class="grow flex items-center justify-center p-4 sm:p-8 lg:p-10">
        <div class="w-full max-w-[1200px] my-auto">
            
            {{-- Card Wrapper Neo-Brutalist --}}
            <div class="bg-white rounded-2xl border-2 sm:border-3 border-[#153373] shadow-[6px_6px_0px_#153373] overflow-hidden grid grid-cols-1 lg:grid-cols-12">
                
                {{-- LEFT SIDE: INFO BANNER --}}
                <div class="lg:col-span-5 bg-[#DAE2FF]/20 border-b-2 lg:border-b-0 lg:border-r-2 border-[#153373] p-6 sm:p-8 lg:p-10 flex flex-col justify-between space-y-8">
                    <div class="space-y-6">
                        
                        {{-- Tag Badge --}}
                        <div>
                            <span class="inline-flex items-center gap-1.5 bg-[#FFE259] text-[#153373] text-[11px] sm:text-xs font-extrabold uppercase tracking-wider px-3.5 py-1.5 rounded-full border-2 border-[#153373] shadow-[3px_3px_0px_#153373] -rotate-1 transform">
                                <svg class="w-4 h-4 text-[#153373]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                                AMERTA UNAIR 2026 REGISTRATION
                            </span>
                        </div>

                        {{-- Main Heading & Subtitle --}}
                        <div class="space-y-3">
                            <h1 class="font-syne text-2xl sm:text-3xl lg:text-4xl font-bold text-[#001D54] leading-tight">
                                Mulai Persiapan Ospek<br class="hidden sm:inline"/> Tanpa Ribet & Bebas Cemas.
                            </h1>
                            <p class="text-sm sm:text-base font-medium text-[#444650] leading-relaxed">
                                Teman setia Ksatria Airlangga mengurus seluruh kelengkapan atribut, nametag, hingga seragam AMERTA & PKKMB Fakultas.
                            </p>
                        </div>

                        {{-- Feature Highlights --}}
                        <div class="space-y-4 pt-2">
                            
                            {{-- Feature 1 --}}
                            <div class="bg-white p-4 rounded-xl border-2 border-[#153373] shadow-[3px_3px_0px_#153373] flex items-start gap-3.5">
                                <div class="w-10 h-10 bg-[#FFD9E4] rounded-lg border-2 border-[#153373] shadow-[2px_2px_0px_#153373] flex items-center justify-center shrink-0 text-[#153373]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#001D54] tracking-wide">Pembayaran QRIS Fleksibel</h4>
                                    <p class="text-xs text-[#444650] font-medium mt-0.5">Bisa cicil mulai dari DP 50% atau langsung lunas instan.</p>
                                </div>
                            </div>

                            {{-- Feature 2 --}}
                            <div class="bg-white p-4 rounded-xl border-2 border-[#153373] shadow-[3px_3px_0px_#153373] flex items-start gap-3.5">
                                <div class="w-10 h-10 bg-[#DAE2FF] rounded-lg border-2 border-[#153373] shadow-[2px_2px_0px_#153373] flex items-center justify-center shrink-0 text-[#153373]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#001D54] tracking-wide">Pantau Order Real-Time</h4>
                                    <p class="text-xs text-[#444650] font-medium mt-0.5">Pantau progres cetak berkas hingga notifikasi siap diambil di Booth Kampus B (Dharmawangsa) atau Kampus C (Mulyorejo).</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Footer Note --}}
                    <div class="pt-4 border-t border-[#153373]/20 text-[11px] font-bold text-[#757781] flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#153373] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span>Data kamu terjamin aman & hanya digunakan untuk keperluan transaksi AMERTA.</span>
                    </div>
                </div>

                {{-- RIGHT SIDE: REGISTER FORM --}}
                <div class="lg:col-span-7 bg-white p-6 sm:p-8 lg:p-10 flex flex-col justify-center"
                     x-data="{ 
                        password: '', 
                        password_confirmation: '', 
                        showPassword: false,
                        get isMatched() { return this.password_confirmation.length > 0 && this.password === this.password_confirmation },
                        get strength() {
                            if (!this.password) return 0;
                            let score = 0;
                            if (this.password.length >= 8) score++;
                            if (/[A-Z]/.test(this.password)) score++;
                            if (/[0-9]/.test(this.password)) score++;
                            if (/[^A-Za-z0-9]/.test(this.password)) score++;
                            return score;
                        }
                     }">
                     
                    {{-- Form Header --}}
                    <div class="space-y-3 mb-6">
                        <div>
                            <span class="inline-flex items-center gap-1.5 bg-[#FD7AB2] text-[#760745] text-[11px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full border-2 border-[#153373] shadow-[2px_2px_0px_#153373] rotate-1 transform">
                                AKUN MAHASISWA BARU
                            </span>
                        </div>
                        <h2 class="font-syne text-2xl sm:text-3xl font-bold text-[#001D54]">
                            Buat Akun TemanAmerta
                        </h2>
                        <p class="text-xs sm:text-sm font-medium text-[#444650]">
                            Daftar untuk mulai memesan kebutuhan AMERTA dan PKKMB-mu dengan aman.
                        </p>
                    </div>

                    {{-- Form Element --}}
                    <form action="/register" method="POST" class="space-y-4">
                        @csrf

                        {{-- Field 1: Nama Lengkap --}}
                        <div class="space-y-1.5">
                            <div class="flex justify-between items-center text-xs">
                                <label for="nama" class="font-extrabold text-[#001D54] tracking-wide">
                                    Nama Lengkap <span class="text-[#BA1A1A]">*</span>
                                </label>
                                <span class="font-extrabold text-[#6E5E00] flex items-center gap-1 text-[11px]">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    Sesuai nama KTP/KTM
                                </span>
                            </div>
                            <input 
                                type="text" 
                                name="nama" 
                                id="nama" 
                                placeholder="Masukkan nama lengkap" 
                                required 
                                value="{{ old('nama') }}"
                                class="w-full bg-[#FBF9F5] border-2 border-[#153373] rounded-xl px-4 py-2.5 text-xs sm:text-sm font-bold text-[#001D54] placeholder-[#757781]/60 focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all"
                            >
                            @error('nama')
                                <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Field 2: Email Aktif --}}
                        <div class="space-y-1.5">
                            <label for="email" class="block text-xs font-extrabold text-[#001D54] tracking-wide">
                                Email Aktif <span class="text-[#BA1A1A]">*</span>
                            </label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                placeholder="nama@student.unair.ac.id" 
                                required 
                                value="{{ old('email') }}"
                                class="w-full bg-[#FBF9F5] border-2 border-[#153373] rounded-xl px-4 py-2.5 text-xs sm:text-sm font-bold text-[#001D54] placeholder-[#757781]/60 focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all"
                            >
                            <p class="text-[11px] font-medium text-[#444650] flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 text-[#153373] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Digunakan untuk bukti nota & pemberitahuan verifikasi pembayaran.
                            </p>
                            @error('email')
                                <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Field 3: WhatsApp --}}
                        <div class="space-y-1.5">
                            <label for="no_hp" class="block text-xs font-extrabold text-[#001D54] tracking-wide">
                                Nomor WhatsApp / HP <span class="text-[#BA1A1A]">*</span>
                            </label>
                            <div class="flex items-center bg-white border-2 border-[#A43369] rounded-xl shadow-[3px_3px_0px_#153373] overflow-hidden">
                                <div class="bg-[#001D54] text-white px-3.5 py-2.5 text-xs font-extrabold border-r-2 border-[#153373] shrink-0">
                                    +62
                                </div>
                                <input 
                                    type="tel" 
                                    name="no_hp" 
                                    id="no_hp" 
                                    placeholder="812-3456-7890" 
                                    required 
                                    value="{{ old('no_hp') }}"
                                    class="w-full px-3.5 py-2.5 text-xs sm:text-sm font-bold text-[#1B1C1A] placeholder-[#757781]/60 focus:outline-none"
                                >
                            </div>
                            <p class="text-[11px] font-medium text-[#444650]">
                                Notifikasi pesanan & QR pengambilan paket akan dikirim langsung ke WhatsApp ini.
                            </p>
                            @error('no_hp')
                                <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Field 4 & 5: Password & Confirmation Side-by-Side --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            {{-- Kata Sandi --}}
                            <div class="space-y-1.5">
                                <label for="password" class="block text-xs font-extrabold text-[#001D54] tracking-wide">
                                    Kata Sandi <span class="text-[#BA1A1A]">*</span>
                                </label>
                                <div class="relative">
                                    <input 
                                        :type="showPassword ? 'text' : 'password'" 
                                        name="password" 
                                        id="password" 
                                        x-model="password"
                                        placeholder="KsatriaTangguh2026!" 
                                        required 
                                        class="w-full bg-[#FBF9F5] border-2 border-[#153373] rounded-xl pl-3.5 pr-9 py-2.5 text-xs font-bold text-[#1B1C1A] placeholder-[#757781]/60 focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all"
                                    >
                                    <button type="button" @click="showPassword = !showPassword" class="absolute right-3 top-2.5 text-[#444650] hover:text-[#001D54]">
                                        <svg x-show="!showPassword" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        <svg x-show="showPassword" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.025 10.025 0 013.682-.821c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-2.19 3.558M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18"/></svg>
                                    </button>
                                </div>
                                
                                {{-- Password Strength Meter --}}
                                <div class="flex items-center gap-1.5 pt-1" x-show="password.length > 0">
                                    <div class="h-2 flex-1 rounded-full border border-[#153373]" :class="strength >= 1 ? 'bg-[#6E5E00]' : 'bg-gray-200'"></div>
                                    <div class="h-2 flex-1 rounded-full border border-[#153373]" :class="strength >= 2 ? 'bg-[#6E5E00]' : 'bg-gray-200'"></div>
                                    <div class="h-2 flex-1 rounded-full border border-[#153373]" :class="strength >= 3 ? 'bg-[#6E5E00]' : 'bg-gray-200'"></div>
                                    <span class="text-[11px] font-bold text-[#6E5E00] ml-1" x-text="strength >= 3 ? 'Kuat' : (strength >= 2 ? 'Sedang' : 'Lemah')"></span>
                                </div>
                                @error('password')
                                    <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Konfirmasi Sandi --}}
                            <div class="space-y-1.5">
                                <label for="password_confirmation" class="block text-xs font-extrabold text-[#001D54] tracking-wide">
                                    Konfirmasi Sandi <span class="text-[#BA1A1A]">*</span>
                                </label>
                                <input 
                                    :type="showPassword ? 'text' : 'password'" 
                                    name="password_confirmation" 
                                    id="password_confirmation" 
                                    x-model="password_confirmation"
                                    placeholder="KsatriaTangguh2026!" 
                                    required 
                                    class="w-full bg-[#FBF9F5] border-2 border-[#153373] rounded-xl px-3.5 py-2.5 text-xs font-bold text-[#1B1C1A] placeholder-[#757781]/60 focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all"
                                >
                                <p class="text-[11px] font-bold text-[#6E5E00] flex items-center gap-1" x-show="isMatched" x-cloak>
                                    <svg class="w-3.5 h-3.5 text-[#6E5E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    Sandi cocok
                                </p>
                            </div>

                        </div>

                        {{-- Field 6: Terms & Conditions Checkbox --}}
                        <div class="pt-2">
                            <label class="flex items-start gap-2.5 cursor-pointer select-none">
                                <input 
                                    type="checkbox" 
                                    name="terms" 
                                    id="terms" 
                                    required 
                                    class="w-4 h-4 rounded border-2 border-[#153373] text-[#A43369] focus:ring-0 cursor-pointer accent-[#A43369] mt-0.5"
                                >
                                <span class="text-xs font-medium text-[#444650] leading-snug">
                                    Saya menyetujui 
                                    <span class="font-extrabold text-[#001D54]">Ketentuan Layanan</span>
                                    & 
                                    <span class="font-extrabold text-[#001D54]">Kebijakan Privasi</span>
                                    TemanAmerta.
                                </span>
                            </label>
                            @error('terms')
                                <p class="text-[11px] font-bold text-red-600 mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div class="pt-3">
                            <button type="submit" class="w-full bg-[#A43369] hover:bg-[#8d2a58] text-white font-extrabold text-sm py-3 px-6 rounded-xl border-2 border-[#153373] shadow-[3px_3px_0px_#153373] flex items-center justify-center gap-2 transition-all active:translate-x-[2px] active:translate-y-[2px] active:shadow-none">
                                <span>Daftar Akun Sekarang</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>

                    </form>

                    {{-- Login Link --}}
                    <div class="mt-6 pt-4 border-t border-[#153373]/10 text-center text-xs">
                        <span class="font-semibold text-[#444650]">Sudah punya akun?</span>
                        <a href="/login" class="font-extrabold text-[#001D54] underline hover:text-[#A43369] ml-1 inline-flex items-center gap-0.5">
                            <span>Masuk di sini</span>
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </main>

    {{-- Footer Bar --}}
    <footer class="w-full bg-[#FBF9F5] border-t-2 border-[#153373] py-4">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10 flex items-center justify-between text-[11px] font-bold text-[#757781]">
            <span>© TemanAmerta. Ksatria Airlangga 2026.</span>
            <a href="https://wa.me/" target="_blank" class="text-[#001D54] hover:underline">
                Butuh bantuan? Hubungi Admin
            </a>
        </div>
    </footer>

</body>
</html>
