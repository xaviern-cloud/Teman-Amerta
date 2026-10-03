<x-layouts.app title="TemanAmerta — Kebutuhan Ospek Ksatria Airlangga" :contained="false">
    <div class="flex-grow">
        <!-- Hero Section -->
        <section class="w-full pt-10 pb-16 px-6 md:px-10 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border-brutal rounded-full shadow-brutal-sm">
                        <span class="w-2.5 h-2.5 bg-emerald-500 rounded-full animate-pulse"></span>
                        <span class="text-xs font-extrabold uppercase tracking-wider">BATCH 1 TELAH DIBUKA • KUOTA TERSEDIA</span>
                    </div>

                    <h1 class="text-4xl md:text-6xl font-syne font-bold leading-tight">
                        Semua Kebutuhan <br class="hidden md:block"/>
                        AMERTA? 
                        <span class="inline-block px-3 py-1 bg-pink text-white rounded-xl border-brutal shadow-brutal-md transform -rotate-1 mt-1">
                            Ada di Sini.
                        </span>
                    </h1>

                    <p class="text-gray-700 text-base md:text-lg font-medium max-w-xl">
                        Platform Jasa Cetak ID Card dan Pre-Order Kebutuhan Ospek untuk Ksatria Airlangga.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="#katalog" class="px-6 py-3.5 bg-pink text-white font-bold rounded-xl border-brutal shadow-brutal-md hover:translate-x-0.5 hover:translate-y-0.5 transition flex items-center gap-2">
                            <span>Lihat Katalog Produk</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5" id="batch-info">
                    <div class="bg-white p-6 rounded-2xl border-brutal-thick shadow-brutal-lg space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-yellow border-brutal rounded-md text-xs font-extrabold text-navy">
                                BATCH 1 AMERTA 2026
                            </span>
                            <span class="text-pink text-xs font-extrabold">PO Dibuka</span>
                        </div>
                        <h3 class="text-2xl font-syne font-bold text-navyDark">Gelombang Pertama Penugasan</h3>
                        <div class="space-y-1.5">
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-navy">Kuota Batch 1</span>
                                <span class="text-pink">78 / 100 Terpesan</span>
                            </div>
                            <div class="w-full h-4 bg-gray-200 rounded-full border-brutal overflow-hidden p-0.5">
                                <div class="h-full bg-pinkLight border border-navy rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Katalog Section -->
        <section id="katalog" class="w-full py-10 px-6 md:px-10 max-w-7xl mx-auto space-y-6">
            <div>
                <span class="text-xs font-extrabold text-pink uppercase tracking-widest">KATALOG PERLENGKAPAN</span>
                <h2 class="text-3xl md:text-4xl font-syne font-bold text-navy">Pilih Kebutuhan Ospekmu</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl border-brutal-thick shadow-brutal-md p-5 flex flex-col justify-between space-y-4">
                    <div>
                        <span class="text-xs font-extrabold text-gray-500 uppercase">PAKET BUNDLING</span>
                        <h3 class="text-xl font-syne font-bold text-navy">Paket Bundling Penugasan</h3>
                        <p class="text-sm text-gray-600 mt-1">Lengkap map, buku tugas, dan atribut wajib standar rektorat UNAIR.</p>
                    </div>
                    <div class="flex justify-between items-center pt-2">
                        <span class="text-xl font-syne font-bold text-navy">Rp 29.000</span>
                        <button type="button" data-modal-open="checkoutModal" class="px-4 py-2 bg-navy text-white font-bold text-sm rounded-xl border-brutal shadow-brutal-sm hover:bg-pink transition">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal Form Checkout -->
    <div id="checkoutModal" data-modal class="fixed inset-0 z-50 hidden items-center justify-center bg-navy/60 p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="checkout-title">
        <div class="bg-white rounded-2xl border-brutal-thick shadow-brutal-lg w-full max-w-xl p-6 space-y-4">
            <div class="flex justify-between items-center border-b-2 border-navy pb-3">
                <h3 id="checkout-title" class="font-syne font-bold text-2xl text-navy">Form Pemesanan Kit Amerta</h3>
                <button type="button" data-modal-close aria-label="Tutup form pemesanan" class="text-navy font-extrabold text-xl hover:text-pink">✕</button>
            </div>
            <form data-prototype-form class="space-y-4">
                <input type="text" name="maba_name" required placeholder="Nama Lengkap" class="w-full px-3 py-2 bg-bgSecondary border-brutal rounded-xl text-sm font-bold text-navy">
                <input type="text" name="whatsapp" required placeholder="No. WhatsApp" class="w-full px-3 py-2 bg-bgSecondary border-brutal rounded-xl text-sm font-bold text-navy">
                <select name="faculty" required class="w-full px-3 py-2 bg-bgSecondary border-brutal rounded-xl text-sm font-bold text-navy">
                    <option value="FST">Fakultas Sains dan Teknologi (FST)</option>
                    <option value="FEB">Fakultas Ekonomi dan Bisnis (FEB)</option>
                    <option value="Vokasi">Fakultas Vokasi</option>
                </select>
                <input type="hidden" name="package_type" value="Paket Bundling Penugasan">
                <input type="hidden" name="payment_type" value="full">
                <input type="hidden" name="pickup_location" value="Kampus C">
                <input type="hidden" name="amount" value="29000">
                
                <div>
                    <label class="block text-xs font-extrabold text-navy uppercase mb-1">Upload Bukti Transfer QRIS</label>
                    <input type="file" name="payment_proof" accept="image/*" required class="w-full text-xs font-bold text-navy">
                </div>

                <button type="submit" class="w-full py-3 bg-pink text-white font-bold rounded-xl border-brutal shadow-brutal-md">
                    Simulasikan Pesanan
                </button>
                <div data-form-status class="hidden rounded-xl border-2 border-navy bg-yellow/40 p-3 text-sm font-bold text-navy" role="status"></div>
            </form>
        </div>
    </div>

</x-layouts.app>
