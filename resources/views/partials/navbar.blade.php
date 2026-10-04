<nav class="bg-white border-b-4 border-amerta-navy py-3 px-4 sm:px-8 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        <!-- Brand / Logo -->
        <a href="/" class="flex items-center space-x-2 group">
            <span class="bg-amerta-pink text-white font-black text-lg px-2.5 py-0.5 rounded border-2 border-amerta-navy shadow-neo-sm group-hover:translate-x-0.5 group-hover:translate-y-0.5 transition-all">
                Amerta
            </span>
            <span class="text-xl font-black text-amerta-navy tracking-tight">TemanAmerta</span>
        </a>

        <!-- Nav Links -->
        <div class="hidden md:flex items-center space-x-6 text-sm font-black text-amerta-navy">
            <a href="/" class="hover:text-amerta-pink transition-colors">Beranda</a>
            <a href="/katalog" class="hover:text-amerta-pink transition-colors">Katalog Produk</a>
            <a href="/cart" class="hover:text-amerta-pink transition-colors">Pesanan Saya</a>
        </div>

        <!-- Dynamic Auth State -->
        <div class="flex items-center space-x-3">
            @guest
                <!-- Jika Belum Login -->
                <a href="{{ route('login') }}"
                   class="bg-amerta-bg hover:bg-white text-amerta-navy text-xs font-black px-4 py-2 rounded-xl border-2 border-amerta-navy shadow-neo-sm transition-all">
                    MASUK
                </a>
                <a href="{{ route('register') }}"
                   class="bg-amerta-pink text-white text-xs font-black px-4 py-2 rounded-xl border-2 border-amerta-navy shadow-neo-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                    DAFTAR
                </a>
            @endguest

            @auth
                <!-- Jika Sudah Login -->
                <div class="flex items-center space-x-3">
                    <span class="hidden sm:inline-block text-xs font-extrabold bg-amerta-surface px-3 py-1.5 rounded-lg border-2 border-amerta-navy">
                        👋 {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="bg-rose-500 hover:bg-rose-600 text-white text-xs font-black px-3.5 py-2 rounded-xl border-2 border-amerta-navy shadow-neo-sm transition-all cursor-pointer">
                            LOGOUT
                        </button>
                    </form>
                </div>
            @endauth
        </div>

    </div>
</nav>
