<x-app-layout>
    <x-slot name="title">TemanAmerta - Katalog Pre-Order Perlengkapan AMERTA</x-slot>

    <!-- HERO SECTION -->
    <section class="bg-amerta-surface border-b-3 border-amerta-navy py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                <div class="md:col-span-7">
                    <span class="inline-block bg-amerta-primary text-white font-extrabold text-xs px-3 py-1 rounded-full border-2 border-amerta-navy shadow-neo-sm mb-4 transform -rotate-1">
                         official Pre-Order Partner Maba UNAIR
                    </span>
                    <h1 class="text-3xl sm:text-5xl font-black text-amerta-navy leading-tight mb-4">
                        Semua Kebutuhan AMERTA? <span class="bg-amerta-pink text-white px-2 py-0.5 rounded border-2 border-amerta-navy shadow-neo inline-block transform rotate-1">Ada di Sini.</span>
                    </h1>
                    <p class="text-base text-amerta-navy font-medium mb-6 leading-relaxed max-w-xl">
                        Pesan atribut PKKMB, ID Card custom sesuai fakultas & guidebook resmi tanpa ribet. Terintegrasi langsung dalam sistem batch.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <x-button href="#katalog" variant="pink" size="lg">
                            Lihat Katalog Produk
                        </x-button>
                        <x-button href="/pesanan" variant="secondary" size="lg">
                            Lacak Pesanan Saya
                        </x-button>
                    </div>
                </div>

                <!-- Hero Visual Box -->
                <div class="md:col-span-5">
                    <div class="bg-white border-3 border-amerta-navy rounded-2xl p-6 shadow-neo-lg text-center transform md:rotate-2">
                        <div class="inline-flex p-3 bg-amerta-primary/10 rounded-full border-2 border-amerta-navy mb-3">
                            <svg class="w-8 h-8 text-amerta-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="block text-xs font-black uppercase tracking-wider text-amerta-pink mb-1">Batch Pre-Order Aktif</span>
                        <h2 class="text-2xl font-black text-amerta-navy mb-2">GELOMBANG 1 - AMERTA 2026</h2>
                        <p class="text-xs font-bold text-amerta-muted mb-4">Batas Akhir Pemesanan: 15 Agustus 2026</p>
                        <div class="bg-amerta-surface p-3 rounded-lg border-2 border-amerta-navy text-xs font-bold text-amerta-navy">
                            ⚡ Segera amankan pesananmu sebelum slot batch ditutup!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATALOG & FILTER SECTION -->
    <section id="katalog" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header & Search/Filter -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl font-black text-amerta-navy flex items-center gap-2">
                    Katalog Produk Pre-Order
                </h2>
                <p class="text-sm font-medium text-amerta-muted">Pilih produk sesuai dengan kebutuhan penugasan kamu.</p>
            </div>

            <!-- Filter Buttons Dummy -->
            <div class="flex items-center gap-2 overflow-x-auto pb-2 md:pb-0">
                <button class="px-3 py-1.5 bg-amerta-navy text-white text-xs font-bold rounded-lg border-2 border-amerta-navy shadow-neo-sm whitespace-nowrap">
                    Semua
                </button>
                <button class="px-3 py-1.5 bg-white text-amerta-navy text-xs font-bold rounded-lg border-2 border-amerta-navy shadow-neo-sm hover:bg-amerta-surface whitespace-nowrap">
                    Atribut & ID Card
                </button>
                <button class="px-3 py-1.5 bg-white text-amerta-navy text-xs font-bold rounded-lg border-2 border-amerta-navy shadow-neo-sm hover:bg-amerta-surface whitespace-nowrap">
                    Paket Bundle
                </button>
                <button class="px-3 py-1.5 bg-white text-amerta-navy text-xs font-bold rounded-lg border-2 border-amerta-navy shadow-neo-sm hover:bg-amerta-surface whitespace-nowrap">
                    Perlengkapan
                </button>
            </div>
        </div>

        <!-- PRODUCT GRID (Dummy Data State) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-product-card
                title="ID Card Custom AMERTA + Tali Lanyard"
                category="Atribut & ID Card"
                price="Rp15.000"
                :isCustom="true"
                badge="Best Seller"
                href="/produk/1"
            />

            <x-product-card
                title="Kaos PKKMB Resmi UNAIR 2026"
                category="Perlengkapan"
                price="Rp65.000"
                :hasVariant="true"
                href="/produk/2"
            />

            <x-product-card
                title="Bundle Atribut Lengkap Fakultas Kedokteran"
                category="Paket Bundle"
                price="Rp120.000"
                :isCustom="true"
                badge="Terlaris"
                href="/produk/3"
            />

            <x-product-card
                title="Topi & Buku Panduan AMERTA"
                category="Perlengkapan"
                price="Rp35.000"
                href="/produk/4"
            />
        </div>
    </section>
</x-app-layout>
