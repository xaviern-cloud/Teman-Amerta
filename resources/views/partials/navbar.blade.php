<header class="sticky top-0 z-50 bg-white border-b-3 border-amerta-navy shadow-neo-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo Brand -->
            <a href="/" class="flex items-center gap-2 font-black text-xl tracking-tight text-amerta-navy">
                <span class="bg-amerta-pink text-white px-2 py-0.5 rounded-lg border-2 border-amerta-navy shadow-neo-sm transform -rotate-2">
                    Teman
                </span>
                <span>Amerta</span>
            </a>

            <!-- Nav Links Desktop -->
            <nav class="hidden md:flex items-center space-x-6 font-bold text-sm">
                <a href="/" class="hover:text-amerta-pink transition-colors">Beranda</a>
                <a href="/katalog" class="hover:text-amerta-pink transition-colors">Katalog Produk</a>
                <a href="/pesanan" class="hover:text-amerta-pink transition-colors">Pesanan Saya</a>
            </nav>

            <!-- Action Buttons / Cart & Auth -->
            <div class="flex items-center gap-3">
                <!-- Cart Button -->
                <a href="/cart" class="relative p-2 rounded-lg bg-amerta-surface border-2 border-amerta-navy shadow-neo-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                    <svg class="w-5 h-5 text-amerta-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"></path>
                    </svg>
                    <!-- Badge Item Count (Dummy) -->
                    <span class="absolute -top-2 -right-2 bg-amerta-primary text-white text-xs font-extrabold px-1.5 py-0.5 rounded-full border border-amerta-navy">
                        2
                    </span>
                </a>

                <!-- Auth Button -->
                <x-button href="/login" variant="pink" size="sm">
                    Masuk
                </x-button>
            </div>

        </div>
    </div>
</header>
