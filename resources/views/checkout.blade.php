<x-app-layout>
    <x-slot name="title">Checkout - TemanAmerta</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Header Checkout -->
        <div class="mb-8 border-b-3 border-amerta-navy pb-4">
            <span class="bg-amerta-primary text-white text-xs font-black px-2.5 py-1 rounded border border-amerta-navy uppercase tracking-wider mb-2 inline-block">
                Langkah 1 dari 2
            </span>
            <h1 class="text-3xl font-black text-amerta-navy flex items-center gap-3">
                📋 Konfirmasi & Checkout Pesanan
            </h1>
            <p class="text-sm font-medium text-amerta-muted mt-1">
                Periksa detail kontak dan item pesanan kamu sebelum membuat pesanan.
            </p>
        </div>

        <form action="/checkout/process" method="POST">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- LEFT COLUMN: Contact Info & Item Review -->
                <div class="lg:col-span-8 space-y-6">

                    <!-- SECTION 1: Informasi Kontak Customer -->
                    <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo">
                        <h2 class="text-lg font-black text-amerta-navy mb-4 flex items-center gap-2 border-b-2 border-amerta-border pb-2">
                            <span>👤</span> Data Diri & Pemesan
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    Nama Lengkap Pemesan <span class="text-amerta-pink">*</span>
                                </label>
                                <input type="text" name="customer_name" value="Bariq Hafizh" class="w-full px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none" required readonly>
                            </div>

                            <div>
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    Nomor WhatsApp (Aktif) <span class="text-amerta-pink">*</span>
                                </label>
                                <input type="text" name="whatsapp_number" placeholder="Contoh: 081234567890" value="081234567890" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                                <span class="text-[10px] text-amerta-muted font-medium mt-1 block">Notifikasi status pesanan akan dikirim via WhatsApp.</span>
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    Catatan Tambahan (Opsional)
                                </label>
                                <textarea name="notes" rows="2" placeholder="Catatan khusus untuk pesanan atau instruksi pengambilan..." class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 2: Review Item Pesanan & Snapshot Data -->
                    <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo">
                        <h2 class="text-lg font-black text-amerta-navy mb-4 flex items-center gap-2 border-b-2 border-amerta-border pb-2">
                            <span>📦</span> Ringkasan Item Pesanan (Snapshot)
                        </h2>

                        <div class="space-y-4">
                            <!-- Review Item 1 (Kustom ID Card) -->
                            <div class="bg-amerta-surface border-2 border-amerta-navy rounded-lg p-4 flex flex-col sm:flex-row justify-between gap-4">
                                <div>
                                    <span class="bg-amerta-pink text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy uppercase">
                                        Data Kustom
                                    </span>
                                    <h3 class="font-extrabold text-amerta-navy text-base mt-1">
                                        ID Card Custom AMERTA + Tali Lanyard
                                    </h3>
                                    <p class="text-xs font-bold text-amerta-muted mb-2">Varian: Navy (FST/FKM) | Qty: 1x</p>

                                    <!-- Snapshot Data Personalisasi -->
                                    <div class="bg-white border border-amerta-navy rounded p-2.5 text-xs">
                                        <p class="font-extrabold text-amerta-navy mb-1">📌 Data Personalisasi:</p>
                                        <p class="text-amerta-navy"><strong>Nama:</strong> Bariq Hafizh | <strong>NIM:</strong> 162112345678</p>
                                        <p class="text-amerta-navy"><strong>Fakultas:</strong> Sains dan Teknologi</p>
                                    </div>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="text-xs text-amerta-muted font-bold block">Harga</span>
                                    <span class="text-base font-black text-amerta-navy">Rp15.000</span>
                                </div>
                            </div>

                            <!-- Review Item 2 (Regular) -->
                            <div class="bg-amerta-surface border-2 border-amerta-navy rounded-lg p-4 flex flex-col sm:flex-row justify-between gap-4">
                                <div>
                                    <span class="bg-amerta-primary text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy uppercase">
                                        Produk Standar
                                    </span>
                                    <h3 class="font-extrabold text-amerta-navy text-base mt-1">
                                        Kaos PKKMB Resmi UNAIR 2026
                                    </h3>
                                    <p class="text-xs font-bold text-amerta-muted">Ukuran: L | Warna: Putih | Qty: 1x</p>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="text-xs text-amerta-muted font-bold block">Harga</span>
                                    <span class="text-base font-black text-amerta-navy">Rp65.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: Opsi Tipe Pembayaran (DP vs Lunas Direct) -->
                    <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo">
                        <h2 class="text-lg font-black text-amerta-navy mb-2 flex items-center gap-2 border-b-2 border-amerta-border pb-2">
                            <span>💳</span> Skema Pembayaran
                        </h2>
                        <p class="text-xs text-amerta-muted font-bold mb-4">Pilih metode pembayaran yang kamu inginkan untuk batch ini:</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Option 1: Bayar Lunas -->
                            <label class="cursor-pointer">
                                <input type="radio" name="payment_scheme" value="FULL" class="peer sr-only" checked>
                                <div class="p-4 rounded-xl border-3 border-amerta-navy bg-white peer-checked:bg-amerta-primary/10 peer-checked:border-amerta-primary peer-checked:shadow-neo transition-all">
                                    <span class="font-black text-amerta-navy text-sm block mb-1">Bayar Lunas (100%)</span>
                                    <p class="text-xs text-amerta-muted leading-relaxed">Membayar seluruh total tagihan <strong class="text-amerta-navy">Rp80.000</strong> sekarang.</p>
                                </div>
                            </label>

                            <!-- Option 2: Bayar DP (Down Payment) -->
                            <label class="cursor-pointer">
                                <input type="radio" name="payment_scheme" value="DP" class="peer sr-only">
                                <div class="p-4 rounded-xl border-3 border-amerta-navy bg-white peer-checked:bg-amerta-pink/10 peer-checked:border-amerta-pink peer-checked:shadow-neo transition-all">
                                    <span class="font-black text-amerta-navy text-sm block mb-1">Uang Muka / DP (50%)</span>
                                    <p class="text-xs text-amerta-muted leading-relaxed">Bayar DP dulu sebesar <strong class="text-amerta-pink">Rp40.000</strong>, pelunasan sebelum pengambilan.</p>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Order Total & Submit Action -->
                <div class="lg:col-span-4">
                    <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-6 shadow-neo sticky top-24">
                        <h2 class="text-lg font-black text-amerta-navy border-b-2 border-amerta-navy pb-3 mb-4">
                            Total Pembayaran
                        </h2>

                        <div class="space-y-3 text-sm font-bold text-amerta-navy mb-6">
                            <div class="flex justify-between">
                                <span class="text-amerta-muted">Subtotal Produk</span>
                                <span>Rp80.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-amerta-muted">Batch</span>
                                <span class="text-amerta-navy">Gelombang 1</span>
                            </div>
                            <div class="border-t-2 border-amerta-navy pt-3 flex justify-between text-base">
                                <span class="font-black">Total Harus Dibayar</span>
                                <span class="font-black text-amerta-pink text-xl">Rp80.000</span>
                            </div>
                        </div>

                        <!-- Confirmation Checklist -->
                        <div class="mb-6 bg-white p-3 rounded-lg border-2 border-amerta-navy">
                            <label class="flex items-start gap-2 cursor-pointer">
                                <input type="checkbox" required class="mt-1 rounded border-2 border-amerta-navy text-amerta-pink focus:ring-amerta-pink">
                                <span class="text-xs font-bold text-amerta-navy leading-snug">
                                    Saya mengonfirmasi bahwa data personalisasi & barang pesanan sudah benar.
                                </span>
                            </label>
                        </div>

                        <x-button type="submit" variant="pink" size="lg" class="w-full">
                            Buat Pesanan Sekarang 🚀
                        </x-button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</x-app-layout>
