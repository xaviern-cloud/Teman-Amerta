<x-layouts.app>
    <section class="w-full bg-[#FBF9F5] min-h-screen py-10 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            {{-- HERO SECTION & BATCH CARD --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                {{-- Kolom Kiri: Hero Banner --}}
                <div class="lg:col-span-7 flex flex-col gap-6">
                    
                    {{-- Badge Status --}}
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border-2 border-[#153373] shadow-[2.5px_2.5px_0px_#153373] rounded-full w-max">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-extrabold text-[#153373] uppercase tracking-wider">
                            BATCH 1 TELAH DIBUKA • KUOTA TERSEDIA
                        </span>
                    </div>

                    {{-- Title --}}
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#153373] leading-tight">
                        Semua Kebutuhan AMERTA? 
                        <span class="inline-block bg-[#A43369] text-white px-3.5 py-1 rounded-xl border-2 border-[#153373] shadow-[4px_4px_0px_#153373] -rotate-1 ml-1 mt-2 sm:mt-0">
                            Ada di Sini.
                        </span>
                    </h1>

                    {{-- Subtitle --}}
                    <p class="text-base sm:text-lg font-medium text-[#444650] max-w-xl leading-relaxed">
                        Platform Jasa Cetak ID Card dan Pre-Order Kebutuhan Ospek untuk Ksatria Airlangga. Menyediakan paket penugasan AMERTA, kit ospek, atribut busana, hingga cetak ID Card custom.
                    </p>

                    {{-- Tombol CTA --}}
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="#katalog" class="inline-flex items-center gap-2 bg-[#A43369] text-white font-bold text-base px-6 py-3.5 rounded-xl border-2 border-[#153373] shadow-[4px_4px_0px_#153373] hover:bg-[#8e2b5a] transition-all">
                            <span>Lihat Katalog Produk</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#" class="inline-flex items-center gap-2 bg-white text-[#153373] font-bold text-base px-6 py-3.5 rounded-xl border-2 border-[#153373] shadow-[4px_4px_0px_#153373] hover:bg-gray-50 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            <span>Lacak Status Pesanan</span>
                        </a>
                    </div>

                    {{-- Fitur Singkat --}}
                    <div class="flex flex-wrap items-center gap-2 pt-2">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-[#F5F3EF] border border-[#153373] rounded-lg text-xs font-bold text-[#153373]">
                            <span class="w-2 h-2 rounded-full bg-[#A43369]"></span> Pembayaran Manual QRIS (DP / Lunas)
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-[#F5F3EF] border border-[#153373] rounded-lg text-xs font-bold text-[#153373]">
                            <span class="w-2 h-2 rounded-full bg-[#A43369]"></span> Custom ID Card
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-[#F5F3EF] border border-[#153373] rounded-lg text-xs font-bold text-[#153373]">
                            <span class="w-2 h-2 rounded-full bg-[#A43369]"></span> Verifikasi Admin
                        </span>
                    </div>
                </div>

                {{-- Kolom Kanan: Card Status PO --}}
                <div class="lg:col-span-5 bg-white rounded-2xl border-3 border-[#153373] shadow-[6px_6px_0px_#153373] p-6 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <span class="bg-[#FFE259] text-[#153373] text-xs font-extrabold px-2.5 py-1 rounded border-2 border-[#153373]">
                            BATCH 1 AMERTA 2026
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-[#A43369]">
                            <span class="w-2 h-2 rounded-full bg-[#A43369] animate-pulse"></span> PO Dibuka
                        </span>
                    </div>

                    <h2 class="text-2xl font-bold text-[#001D54]">
                        Gelombang Pertama Penugasan
                    </h2>

                    {{-- Box Countdown --}}
                    <div class="bg-[#FFE259]/30 border-2 border-[#153373] shadow-[2px_2px_0px_#153373] rounded-xl p-3 flex items-center justify-between">
                        <div class="flex items-center gap-2 text-sm font-bold text-[#153373]">
                            <svg class="w-5 h-5 text-[#153373]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Sisa 3 Hari Lagi!</span>
                        </div>
                        <span class="bg-white px-2 py-0.5 border border-[#153373] rounded text-xs font-extrabold text-[#153373]">
                            Berakhir 28 Agustus 2026
                        </span>
                    </div>

                    {{-- Progress Bar Kuota --}}
                    <div class="space-y-1.5 py-2">
                        <div class="flex justify-between text-xs font-bold">
                            <span class="text-[#153373]">Kuota Batch 1</span>
                            <span class="text-[#A43369]">78 / 100 Terpesan (78%)</span>
                        </div>
                        <div class="w-full bg-[#EAE8E4] h-4 rounded-full border-2 border-[#153373] p-0.5 overflow-hidden">
                            <div class="bg-[#FD7AB2] h-full rounded-full border border-[#153373]" style="width: 78%"></div>
                        </div>
                    </div>

                    {{-- Info Pengambilan & Pembayaran --}}
                    <div class="pt-3 border-t-2 border-[#153373]/20 grid grid-cols-2 gap-2 text-xs font-extrabold text-[#1B1C1A]">
                        <div class="bg-[#F5F3EF] p-2 rounded-lg border border-[#153373] flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#A43369]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            <span>Ambil di Kampus B & C</span>
                        </div>
                        <div class="bg-[#F5F3EF] p-2 rounded-lg border border-[#153373] flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#A43369]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            <span>Bisa DP 50% QRIS</span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- KATALOG PRODUK --}}
            <div id="katalog" class="space-y-6 pt-10">
                
                {{-- Header Katalog --}}
                <div>
                    <span class="text-xs font-extrabold uppercase tracking-widest text-[#A43369]">
                        KATALOG PERLENGKAPAN ORIENTASI
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-[#153373] mt-1">
                        Pilih Kebutuhan Ospekmu
                    </h2>
                </div>

                {{-- Filter Kategori --}}
                <div class="flex items-center gap-3 overflow-x-auto pb-2 scrollbar-none">
                    <button class="px-4 py-2.5 bg-[#153373] text-white font-bold text-sm rounded-xl border-2 border-[#153373] shadow-[3px_3px_0px_#153373] whitespace-nowrap">
                        Semua Produk (12)
                    </button>
                    <button class="px-4 py-2.5 bg-white text-[#153373] font-bold text-sm rounded-xl border-2 border-[#153373] shadow-[3px_3px_0px_#153373] hover:bg-gray-50 whitespace-nowrap">
                        ID Card & Lanyard (4)
                    </button>
                    <button class="px-4 py-2.5 bg-white text-[#153373] font-bold text-sm rounded-xl border-2 border-[#153373] shadow-[3px_3px_0px_#153373] hover:bg-gray-50 whitespace-nowrap">
                        OSPEK Kit & Aksesoris (8)
                    </button>
                </div>

                {{-- Grid Produk --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-4">
                    
                    {{-- Produk 1 --}}
                    <x-product-card 
                        category="PAKET BUNDLING"
                        title="Paket Bundling Penugasan AMERTA 2026"
                        description="Lengkap map, buku tugas, dan atribut wajib standar rektorat UNAIR."
                        price="Rp 29.000"
                        badge="Bisa Custom Data"
                        url="/produk/paket-bundling"
                    />

                    {{-- Produk 2 --}}
                    <x-product-card 
                        category="ID CARD & LANYARD"
                        title="ID Card Laskar Vokasi 2026"
                        description="Cetak kilat dengan tali eksklusif logo fakultas dan nama lengkap maba."
                        price="Rp 15.000"
                        badge="Bisa Custom Data"
                        url="/produk/id-card-vokasi"
                    />

                </div>

            </div>

        </div>
    </section>
</x-layouts.app>