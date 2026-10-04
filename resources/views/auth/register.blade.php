<x-layouts.app>
    <x-slot:title>Daftar - TemanAmerta</x-slot:title>

    <div class="min-h-[75vh] flex items-center justify-center py-10 px-4">
        <div class="w-full max-w-lg bg-white p-8 rounded-2xl border-4 border-amerta-navy shadow-neo-lg">

            <div class="text-center mb-6">
                <span class="bg-amerta-navy text-white font-black text-xs px-3 py-1 rounded-full border-2 border-amerta-navy shadow-neo-sm inline-block mb-2">
                    REGISTRASI MAHASISWA
                </span>
                <h1 class="text-3xl font-black text-amerta-navy tracking-tight">Buat Akun Baru</h1>
                <p class="text-xs font-semibold text-amerta-muted mt-1">Lengkapi data untuk kemudahan melacak paket pre-order</p>
            </div>

            <!-- Error Alerts -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-rose-100 border-2 border-amerta-navy rounded-lg text-xs font-bold text-rose-700 shadow-neo-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <p>• {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Nama Lengkap Input -->
                <div>
                    <label for="nama" class="block text-xs font-black text-amerta-navy uppercase tracking-wider mb-1">
                        Nama Lengkap
                    </label>
                    <input id="nama" type="text" name="nama" value="{{ old('nama') }}" required autofocus
                        placeholder="Ksatria Amerta"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-black text-amerta-navy uppercase tracking-wider mb-1">
                        Email  Pribadi
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        placeholder="ksatria@gmail.com"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Nomor HP Input -->
                <div>
                    <label for="no_hp" class="block text-xs font-black text-amerta-navy uppercase tracking-wider mb-1">
                        Nomor HP / WhatsApp
                    </label>
                    <input id="no_hp" type="text" name="no_hp" value="{{ old('no_hp') }}" required
                        placeholder="081234567890"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-black text-amerta-navy uppercase tracking-wider mb-1">
                        Kata Sandi
                    </label>
                    <input id="password" type="password" name="password" required
                        placeholder="Min. 8 karakter (Huruf Besar, Kecil, Angka & Simbol)"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Password Confirmation Input -->
                <div>
                    <label for="password_confirmation" class="block text-xs font-black text-amerta-navy uppercase tracking-wider mb-1">
                        Konfirmasi Kata Sandi
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        placeholder="Ketik ulang kata sandi"
                        class="w-full px-4 py-2.5 bg-amerta-bg border-2 border-amerta-navy rounded-xl text-sm font-bold text-amerta-navy focus:outline-none focus:bg-white focus:ring-2 focus:ring-amerta-pink shadow-neo-sm transition-all" />
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-amerta-navy hover:bg-[#1a3f8b] text-white font-black py-3 rounded-xl border-3 border-amerta-navy shadow-neo hover:translate-x-0.5 hover:translate-y-0.5 transition-all text-sm tracking-wide mt-2 cursor-pointer">
                    DAFTAR AKUN SEKARANG
                </button>
            </form>

            <div class="mt-6 pt-4 border-t-2 border-dashed border-gray-200 text-center text-xs font-bold text-amerta-navy">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-amerta-pink underline hover:text-amerta-navy">Masuk di sini</a>
            </div>
        </div>
    </div>
</x-layouts.app>
