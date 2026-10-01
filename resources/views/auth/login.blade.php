<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk ke Akun - TemanAmerta</title>

    <!-- Google Fonts: Syne & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Syne:wght@700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (Vite & CDN Fallback) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --font-syne: 'Syne', sans-serif;
            --font-jakarta: 'Plus Jakarta Sans', sans-serif;
            --color-amerta-navy: #153373;
            --color-amerta-navy-dark: #001D54;
            --color-amerta-pink: #D45990;
            --color-amerta-pink-dark: #A43369;
            --color-amerta-cream: #FBF9F5;
            --color-amerta-surface: #F5F3EF;
            --color-amerta-muted: #444650;
        }
    </style>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FBF9F5;
            color: #1B1C1A;
        }
        .font-syne {
            font-family: 'Syne', sans-serif;
        }
        /* Neo-brutalism Utilities */
        .neo-box-shadow {
            box-shadow: 4px 4px 0px #153373;
        }
        .neo-box-shadow-sm {
            box-shadow: 2px 2px 0px #153373;
        }
        .neo-box-shadow-btn {
            box-shadow: 3px 3px 0px #153373;
        }
        .neo-btn-press:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px #153373;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-[#FBF9F5] text-[#1B1C1A] antialiased">

    <!-- Top Navigation Bar -->
    <header class="w-full bg-[#FBF9F5] border-b-2 border-[#153373] shadow-[0_4px_0_0_#153373] sticky top-0 z-50">
        <div class="max-w-[1280px] mx-auto h-20 px-6 md:px-10 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <span class="font-syne font-bold text-2xl md:text-[26px] tracking-tight text-[#001D54] group-hover:text-[#D45990] transition-colors">
                    TemanAmerta
                </span>
            </a>

            <!-- Right Navigation Items -->
            <div class="flex items-center gap-4 md:gap-6">
                <a href="/" class="text-[#444650] hover:text-[#001D54] font-bold text-sm tracking-wide transition-colors flex items-center gap-1">
                    ← <span class="hidden sm:inline">Kembali ke</span> Katalog
                </a>
                <div class="w-9 h-9 rounded-full bg-[#001D54] border-2 border-[#153373] shadow-[2px_2px_0px_#153373] flex items-center justify-center text-white shrink-0">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 max-w-[1280px] w-full mx-auto px-4 sm:px-6 md:px-10 py-8 md:py-10 flex flex-col justify-center">

        <!-- Breadcrumb / Status Tracker -->
        <div class="flex items-center gap-2 mb-6">
            <span class="text-xs font-extrabold uppercase tracking-wider text-[#444650]">Beranda</span>
            <svg class="w-2.5 h-2.5 text-[#444650]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-xs font-extrabold uppercase tracking-wider text-[#153373]">Autentikasi Akun</span>
        </div>

        <!-- Main Card Container (Playful Pop Neo-Brutalism) -->
        <div class="w-full max-w-[620px] mx-auto bg-white border-2 border-[#153373] rounded-2xl shadow-[4px_4px_0px_#153373] p-6 sm:p-8 md:p-10 relative">

            <!-- Pill Tag Badge -->
            <div class="inline-flex items-center gap-2 bg-[#153373] text-white px-3 py-1 rounded-full text-[11px] font-semibold tracking-wider uppercase shadow-[2px_2px_0px_#153373] mb-4">
                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0110 0v4"></path>
                </svg>
                <span>PORTAL KSATRIA AIRLANGGA</span>
            </div>

            <!-- Header Typography -->
            <div class="mb-6">
                <h1 class="font-syne font-bold text-3xl sm:text-4xl text-[#001D54] tracking-tight leading-[1.15]">
                    Masuk ke <br>TemanAmerta
                </h1>
                <p class="text-[#444650] text-sm sm:text-base font-medium mt-2 leading-relaxed">
                    Lanjutkan pesananmu dan pantau kebutuhan AMERTA dalam satu tempat.
                </p>
            </div>

            <!-- Global / Session Error Notification (if any) -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-[#FFF0F5] border-2 border-[#D45990] rounded-lg shadow-[2px_2px_0px_#D45990] text-sm text-[#001D54] flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#D45990] shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="font-medium">
                        @if ($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                        @elseif ($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
                        @else
                            <p>Terdapat kesalahan pada isian form login Anda.</p>
                        @endif
                    </div>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Field -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="email" class="font-bold text-sm text-[#001D54] tracking-wide">
                            Email
                        </label>
                        <span class="text-[11px] font-medium text-[#444650]">Wajib diisi</span>
                    </div>
                    <div class="relative flex items-center">
                        <span class="absolute left-3.5 text-[#757781] pointer-events-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 006 0v-1a10 10 0 10-3.92 7.94"></path>
                            </svg>
                        </span>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="email aktif"
                            required
                            autofocus
                            autocomplete="email"
                            class="w-full bg-white border-2 @error('email') border-[#D45990] @else border-[#153373] @enderror rounded-lg pl-11 pr-4 py-3 text-sm sm:text-base text-[#001D54] placeholder-[#757781]/70 font-medium shadow-[2px_2px_0px_#153373] focus:outline-none focus:border-[#D45990] focus:shadow-[3px_3px_0px_#D45990] transition-all"
                        >
                    </div>
                    @error('email')
                        <p class="text-xs font-bold text-[#D45990] mt-1.5 flex items-center gap-1">
                            <span>⚠</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="font-bold text-sm text-[#001D54] tracking-wide">
                            Kata Sandi
                        </label>
                        <a href="#" class="text-xs font-extrabold text-[#A43369] hover:text-[#D45990] hover:underline transition-colors">
                            Lupa kata sandi?
                        </a>
                    </div>
                    <div class="relative flex items-center">
                        <span class="absolute left-3.5 text-[#757781] pointer-events-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                        </span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi akunmu"
                            required
                            autocomplete="current-password"
                            class="w-full bg-white border-2 @error('password') border-[#D45990] @else border-[#153373] @enderror rounded-lg pl-11 pr-12 py-3 text-sm sm:text-base text-[#001D54] placeholder-[#757781]/70 font-medium shadow-[2px_2px_0px_#153373] focus:outline-none focus:border-[#D45990] focus:shadow-[3px_3px_0px_#D45990] transition-all"
                        >
                        <!-- Password Visibility Toggle Button -->
                        <button
                            type="button"
                            id="toggle-password"
                            aria-label="Lihat kata sandi"
                            class="absolute right-3 p-1.5 text-[#757781] hover:text-[#001D54] rounded transition-colors focus:outline-none"
                        >
                            <!-- Eye Open Icon -->
                            <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <!-- Eye Closed Icon -->
                            <svg id="eye-slash-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-xs font-bold text-[#D45990] mt-1.5 flex items-center gap-1">
                            <span>⚠</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center gap-2.5 pt-1">
                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        class="w-4 h-4 rounded border-2 border-[#153373] text-[#153373] focus:ring-0 cursor-pointer"
                    >
                    <label for="remember" class="text-sm font-medium text-[#1B1C1A] cursor-pointer select-none">
                        Ingat saya di perangkat ini
                    </label>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full bg-[#A43369] hover:bg-[#D45990] text-white font-bold text-base py-3.5 px-6 rounded-lg border-2 border-[#153373] shadow-[3px_3px_0px_#153373] neo-btn-press flex items-center justify-center gap-2 cursor-pointer transition-all tracking-wide"
                >
                    <span>Masuk ke Akun</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </form>

            <!-- Register Switcher Card -->
            <div class="mt-6 bg-[#F5F3EF] border-2 border-[#153373] rounded-lg shadow-[2px_2px_0px_#153373] p-3 flex flex-wrap items-center justify-center gap-1.5 text-sm text-[#444650]">
                <span>Belum punya akun TemanAmerta?</span>
                <a href="{{ route('register') }}" class="font-bold text-[#001D54] underline decoration-[#A43369] decoration-2 underline-offset-2 hover:text-[#A43369] transition-colors inline-flex items-center gap-1">
                    Daftar Sekarang
                    <svg class="w-3.5 h-3.5 text-[#001D54]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </a>
            </div>

            <!-- Security & Trust Micro-Badge -->
            <div class="mt-6 flex items-center justify-center gap-2 text-xs font-medium text-[#444650]">
                <svg class="w-3.5 h-3.5 text-[#153373]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0110 0v4"></path>
                </svg>
                <span>Data aman & terenkripsi</span>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-[#FBF9F5] border-t-2 border-[#153373] py-4 px-6 md:px-10 mt-auto">
        <div class="max-w-[1280px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
            <span class="text-xs text-[#757781] font-medium">
                © {{ date('Y') }} TemanAmerta. All rights reserved.
            </span>
            <a href="https://wa.me/" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-[#153373] hover:text-[#D45990] transition-colors flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"></path>
                </svg>
                <span>Butuh bantuan? Hubungi WhatsApp Admin</span>
            </a>
        </div>
    </footer>

    <!-- Client-side Password Visibility Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('toggle-password');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            const eyeSlashIcon = document.getElementById('eye-slash-icon');

            if (toggleBtn && passwordInput) {
                toggleBtn.addEventListener('click', function () {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    eyeIcon.classList.toggle('hidden', isPassword);
                    eyeSlashIcon.classList.toggle('hidden', !isPassword);
                });
            }
        });
    </script>
</body>
</html>
