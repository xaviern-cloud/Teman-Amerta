<x-layouts.app>
    <x-slot:title>Masuk - TemanAmerta</x-slot:title>

    <div class="min-h-[70vh] flex items-center justify-center py-10 px-4">
        <div class="w-full max-w-md bg-white p-8 rounded-2xl border-4 border-amerta-navy shadow-neo-lg relative">

            <!-- Badge Header -->
            <div class="text-center mb-8">
                <span class="bg-amerta-pink text-white font-black text-sm px-4 py-1.5 rounded-full border-2 border-amerta-navy shadow-neo-sm inline-block mb-3">
                    PKKMB UNAIR 2026
                </span>
                <h1 class="text-3xl font-black text-amerta-navy tracking-tight">Selamat Datang!</h1>
                <p class="text-xs font-semibold text-amerta-muted mt-1">Masuk untuk mengelola pesanan & atribut kamu</p>
            </div>

            <!-- Session Status Alert -->
            @if (session('status'))
                <div class="mb-4 p-3 bg-emerald-100 border-2 border-amerta-navy rounded-lg text-xs font-bold text-emerald-800 shadow-neo-sm">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-rose-100 border-2 border-amerta-navy rounded-lg text-xs font-bold text-rose-700 shadow-neo-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <p>• {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-black text-amerta-navy uppercase tracking-wider mb-1.5">
                        Email Unair / Student Email
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="nama@student.unair.ac.id"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Password Input -->
                <div>
                    <div class="flex justify-between items-center mb-1.5">
                        <label for="password" class="block text-xs font-black text-amerta-navy uppercase tracking-wider">
                            Kata Sandi
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-bold text-amerta-pink hover:underline">
                                Lupa sandi?
                            </a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" required
                        placeholder="••••••••"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="w-4 h-4 text-amerta-pink bg-amerta-bg border-2 border-amerta-navy rounded focus:ring-amerta-pink">
                    <label for="remember_me" class="ml-2 text-xs font-bold text-amerta-navy cursor-pointer">
                        Ingat sesi saya
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-amerta-pink hover:bg-[#c24b7f] text-white font-black py-3 rounded-xl border-3 border-amerta-navy shadow-neo hover:translate-x-0.5 hover:translate-y-0.5 transition-all text-sm tracking-wide">
                    MASUK KE AKUN
                </button>
            </form>

            <!-- Link Register -->
            <div class="mt-8 pt-6 border-t-2 border-dashed border-gray-200 text-center text-xs font-bold text-amerta-navy">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-amerta-pink underline hover:text-amerta-navy">Daftar Pre-Order di sini</a>
            </div>
        </div>
    </div>
</x-layouts.app>
