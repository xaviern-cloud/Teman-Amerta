<x-app-layout>
    <x-slot name="title">Detail Pesanan #ORD-20260810-001 - TemanAmerta</x-slot>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Breadcrumb & Title -->
        <div class="mb-6">
            <a href="/pesanan" class="text-xs font-bold text-amerta-pink hover:underline mb-2 inline-block">
                ← Kembali ke Daftar Pesanan
            </a>
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b-3 border-amerta-navy pb-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-amerta-navy">
                        Detail Pesanan <span class="font-mono text-amerta-pink">#ORD-20260810-001</span>
                    </h1>
                    <p class="text-xs font-bold text-amerta-muted mt-1">Dibuat pada: 10 Agustus 2026 | Batch: Gelombang 1 AMERTA</p>
                </div>
                <div>
                    <span class="bg-amerta-primary text-white text-xs font-black px-3 py-1 rounded-full border-2 border-amerta-navy shadow-neo-sm">
                        Status: Diproses Admin
                    </span>
                </div>
            </div>
        </div>

        <!-- TIMELINE STATUS TRACKING -->
        <div class="bg-white border-3 border-amerta-navy rounded-2xl p-6 shadow-neo mb-8">
            <h2 class="text-base font-black text-amerta-navy mb-6 flex items-center gap-2">
                <span>📍</span> Timeline Pelacakan Pesanan
            </h2>

            <!-- Process Tracker Steps -->
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 relative">
                <!-- Step 1: Completed -->
                <div class="flex sm:flex-col items-center sm:text-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-amerta-primary text-white font-black border-2 border-amerta-navy flex items-center justify-center text-sm shadow-neo-sm">
                        ✓
                    </div>
                    <div>
                        <span class="text-xs font-extrabold text-amerta-navy block">Pesanan Dibuat</span>
                        <span class="text-[10px] text-amerta-muted block font-medium">10 Ags, 10:15 WIB</span>
                    </div>
                </div>

                <!-- Step 2: Completed -->
                <div class="flex sm:flex-col items-center sm:text-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-amerta-primary text-white font-black border-2 border-amerta-navy flex items-center justify-center text-sm shadow-neo-sm">
                        ✓
                    </div>
                    <div>
                        <span class="text-xs font-extrabold text-amerta-navy block">Pembayaran Diverifikasi</span>
                        <span class="text-[10px] text-amerta-muted block font-medium">10 Ags, 11:00 WIB</span>
                    </div>
                </div>

                <!-- Step 3: Active Status -->
                <div class="flex sm:flex-col items-center sm:text-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-amerta-pink text-white font-black border-2 border-amerta-navy flex items-center justify-center text-sm shadow-neo-sm animate-pulse">
                        3
                    </div>
                    <div>
                        <span class="text-xs font-black text-amerta-pink block">Sedang Diproduksi/Cetak</span>
                        <span class="text-[10px] text-amerta-muted block font-medium">Estimasi: 13 Ags</span>
                    </div>
                </div>

                <!-- Step 4: Pending -->
                <div class="flex sm:flex-col items-center sm:text-center gap-3 opacity-40">
                    <div class="w-10 h-10 rounded-full bg-amerta-surface text-amerta-navy font-black border-2 border-amerta-navy flex items-center justify-center text-sm">
                        4
                    </div>
                    <div>
                        <span class="text-xs font-extrabold text-amerta-navy block">Siap Diambil / Dikirim</span>
                        <span class="text-[10px] text-amerta-muted block font-medium">-</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- LEFT COLUMN: Item & Custom Data Details -->
            <div class="lg:col-span-8 space-y-6">
                <!-- Rincian Produk -->
                <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo">
                    <h3 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                        Rincian Item Produk
                    </h3>

                    <div class="space-y-4">
                        <div class="bg-amerta-surface border-2 border-amerta-navy rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-extrabold text-amerta-navy text-sm">ID Card Custom AMERTA + Tali Lanyard</h4>
                                    <p class="text-xs font-bold text-amerta-muted">Varian: Navy (FST/FKM) | Qty: 1x</p>
                                </div>
                                <span class="font-black text-sm text-amerta-navy">Rp15.000</span>
                            </div>

                            <!-- Snapshot Data Personalisasi -->
                            <div class="mt-3 bg-white border border-amerta-navy rounded p-3 text-xs">
                                <p class="font-black text-amerta-navy mb-1">📌 Snapshot Data Personalisasi:</p>
                                <div class="grid grid-cols-2 gap-2 font-medium">
                                    <div><span class="text-amerta-muted">Nama:</span> Bariq Hafizh</div>
                                    <div><span class="text-amerta-muted">NIM:</span> 162112345678</div>
                                    <div><span class="text-amerta-muted">Fakultas:</span> Sains dan Teknologi</div>
                                    <div><span class="text-amerta-muted">File Foto:</span> <a href="#" class="text-amerta-pink font-bold underline">Lihat Foto</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-amerta-surface border-2 border-amerta-navy rounded-lg p-4 flex justify-between items-center">
                            <div>
                                <h4 class="font-extrabold text-amerta-navy text-sm">Kaos PKKMB Resmi UNAIR 2026</h4>
                                <p class="text-xs font-bold text-amerta-muted">Ukuran: L | Warna: Putih | Qty: 1x</p>
                            </div>
                            <span class="font-black text-sm text-amerta-navy">Rp65.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Payment Summary History -->
            <div class="lg:col-span-4">
                <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-4">
                    <h3 class="font-black text-base text-amerta-navy border-b-2 border-amerta-navy pb-2">
                        Riwayat Pembayaran
                    </h3>

                    <div class="space-y-2 text-xs font-bold text-amerta-navy">
                        <div class="flex justify-between">
                            <span class="text-amerta-muted">Total Tagihan:</span>
                            <span>Rp80.000</span>
                        </div>
                        <div class="flex justify-between text-amerta-primary">
                            <span>Status Bayar:</span>
                            <span>LUNAS</span>
                        </div>
                    </div>

                    <!-- Transfer Proof History -->
                    <div class="bg-white border-2 border-amerta-navy rounded-lg p-3 text-xs space-y-2">
                        <div class="flex justify-between items-center border-b border-amerta-border pb-1">
                            <span class="font-black text-amerta-navy">Transfer #1 (Lunas)</span>
                            <span class="bg-green-100 text-green-800 text-[10px] font-bold px-1.5 py-0.5 rounded">Disetujui</span>
                        </div>
                        <p class="text-amerta-muted font-medium">Nominal: <strong>Rp80.000</strong></p>
                        <p class="text-amerta-muted font-medium">Tanggal: 10 Ags 2026, 10:20 WIB</p>
                        <a href="#" class="inline-block text-[10px] font-bold text-amerta-pink underline">Lihat Bukti Transfer</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
