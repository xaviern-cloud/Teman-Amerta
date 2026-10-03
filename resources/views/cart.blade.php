<x-app-layout>
    <x-slot name="title">Keranjang Belanja - TemanAmerta</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Header Halaman -->
        <div class="mb-8 border-b-3 border-amerta-navy pb-4">
            <h1 class="text-3xl font-black text-amerta-navy flex items-center gap-3">
                🛒 Keranjang Belanja Kamu
            </h1>
            <p class="text-sm font-medium text-amerta-muted mt-1">
                Periksa kembali atribut dan data kustom kamu sebelum melanjutkan ke pembayaran.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- LEFT COLUMN: Daftar Item Keranjang -->
            <div class="lg:col-span-8 space-y-4">

                <!-- CART ITEM 1: Produk Kustom (ID Card) -->
                <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo relative">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <!-- Thumbnail / Badge -->
                        <div class="w-20 h-20 bg-amerta-surface border-2 border-amerta-navy rounded-lg flex-shrink-0 flex items-center justify-center p-2">
                            <span class="text-2xl">🪪</span>
                        </div>

                        <!-- Content Info -->
                        <div class="flex-grow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="bg-amerta-pink text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy uppercase tracking-wider">
                                        Data Kustom
                                    </span>
                                    <h3 class="font-extrabold text-amerta-navy text-lg leading-snug mt-1">
                                        ID Card Custom AMERTA + Tali Lanyard
                                    </h3>
                                    <p class="text-xs font-bold text-amerta-muted">Varian: Navy (FST/FKM)</p>
                                </div>
                                <button class="text-red-500 hover:text-red-700 font-bold text-xs flex items-center gap-1 p-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Hapus
                                </button>
                            </div>

                            <!-- Preview Data Kustom -->
                            <div class="mt-3 bg-amerta-surface border-2 border-amerta-navy rounded-lg p-3 text-xs">
                                <span class="font-black text-amerta-navy block mb-1">📋 Data Personalisasi:</span>
                                <div class="grid grid-cols-2 gap-2 text-amerta-navy font-medium">
                                    <div><span class="text-amerta-muted">Nama:</span> Bariq Hafizh</div>
                                    <div><span class="text-amerta-muted">NIM:</span> 162112345678</div>
                                    <div><span class="text-amerta-muted">Fakultas:</span> Sains dan Teknologi</div>
                                    <div><span class="text-amerta-muted">Pasfoto:</span> <span class="text-amerta-pink font-bold">pasfoto_bariq.jpg</span></div>
                                </div>
                            </div>

                            <!-- Price & Quantity Controls -->
                            <div class="flex items-center justify-between mt-4 pt-3 border-t-2 border-amerta-border">
                                <div class="flex items-center border-2 border-amerta-navy rounded-lg bg-white overflow-hidden shadow-neo-sm">
                                    <button class="px-2.5 py-1 font-black text-xs text-amerta-navy hover:bg-amerta-surface">-</button>
                                    <input type="number" value="1" min="1" class="w-10 text-center font-black text-xs text-amerta-navy focus:outline-none" readonly>
                                    <button class="px-2.5 py-1 font-black text-xs text-amerta-navy hover:bg-amerta-surface">+</button>
                                </div>
                                <div class="text-right">
                                    <span class="text-[10px] text-amerta-muted font-bold block">Subtotal</span>
                                    <span class="text-base font-black text-amerta-navy">Rp15.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CART ITEM 2: Produk Regular (Kaos) -->
                <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo relative">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <!-- Thumbnail -->
                        <div class="w-20 h-20 bg-amerta-surface border-2 border-amerta-navy rounded-lg flex-shrink-0 flex items-center justify-center p-2">
                            <span class="text-2xl">👕</span>
                        </div>

                        <!-- Content Info -->
                        <div class="flex-grow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="bg-amerta-primary text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy uppercase tracking-wider">
                                        Produk Standar
                                    </span>
                                    <h3 class="font-extrabold text-amerta-navy text-lg leading-snug mt-1">
                                        Kaos PKKMB Resmi UNAIR 2026
                                    </h3>
                                    <p class="text-xs font-bold text-amerta-muted">Ukuran: L | Warna: Putih</p>
                                </div>
                                <button class="text-red-500 hover:text-red-700 font-bold text-xs flex items-center gap-1 p-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Hapus
                                </button>
                            </div>

                            <!-- Price & Quantity Controls -->
                            <div class="flex items-center justify-between mt-4 pt-3 border-t-2 border-amerta-border">
                                <div class="flex items-center border-2 border-amerta-navy rounded-lg bg-white overflow-hidden shadow-neo-sm">
                                    <button class="px-2.5 py-1 font-black text-xs text-amerta-navy hover:bg-amerta-surface">-</button>
                                    <input type="number" value="1" min="1" class="w-10 text-center font-black text-xs text-amerta-navy focus:outline-none" readonly>
                                    <button class="px-2.5 py-1 font-black text-xs text-amerta-navy hover:bg-amerta-surface">+</button>
                                </div>
                                <div class="text-right">
                                    <span class="text-[10px] text-amerta-muted font-bold block">Subtotal</span>
                                    <span class="text-base font-black text-amerta-navy">Rp65.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Order Summary -->
            <div class="lg:col-span-4">
                <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-6 shadow-neo sticky top-24">
                    <h2 class="text-lg font-black text-amerta-navy border-b-2 border-amerta-navy pb-3 mb-4">
                        Ringkasan Pesanan
                    </h2>

                    <div class="space-y-3 text-sm font-bold text-amerta-navy mb-6">
                        <div class="flex justify-between">
                            <span class="text-amerta-muted">Subtotal Produk (2)</span>
                            <span>Rp80.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-amerta-muted">Biaya Layanan Batch</span>
                            <span class="text-amerta-primary">Gratis</span>
                        </div>
                        <div class="border-t-2 border-amerta-navy pt-3 flex justify-between text-base">
                            <span class="font-black">Total Tagihan</span>
                            <span class="font-black text-amerta-pink text-xl">Rp80.000</span>
                        </div>
                    </div>

                    <x-button href="/checkout" variant="pink" size="lg" class="w-full">
                        Lanjut ke Checkout 💳
                    </x-button>

                    <a href="/#katalog" class="block text-center text-xs font-bold text-amerta-muted hover:text-amerta-navy mt-4 underline">
                        ← Tambah Produk Lain
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
