<header class="w-full bg-[#FBF9F5] border-b-2 border-[#153373] sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        
        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2">
            <div class="w-10 h-10 bg-[#FFE259] border-2 border-[#153373] shadow-[2px_2px_0px_#153373] rounded-xl flex items-center justify-center font-extrabold text-[#153373] text-xl">
                TA
            </div>
            <span class="font-bold text-xl text-[#153373] tracking-tight">
                Teman<span class="text-[#A43369]">Amerta</span>
            </span>
        </a>

        {{-- Nav Links (Desktop) --}}
        <nav class="hidden md:flex items-center gap-8 font-bold text-sm text-[#153373]">
            <a href="/" class="hover:text-[#A43369] transition-colors">Katalog OSPEK</a>
            <a href="#lacak" class="hover:text-[#A43369] transition-colors">Lacak Pesanan</a>
            <a href="#faq" class="hover:text-[#A43369] transition-colors">FAQ</a>
            <a href="#kontak" class="hover:text-[#A43369] transition-colors">Bantuan Admin</a>
        </nav>

        {{-- Right CTA --}}
        <div class="flex items-center gap-3">
            <x-button href="#lacak" variant="yellow" class="!px-4 !py-2 !text-xs sm:!text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                <span>Cek Pesanan</span>
            </x-button>
        </div>

    </div>
</header>