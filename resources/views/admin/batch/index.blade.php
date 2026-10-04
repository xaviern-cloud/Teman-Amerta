<x-admin-layout>
    <x-slot name="title">Gelombang Pre-Order - Admin TemanAmerta</x-slot>
    <x-slot name="header">🗓️ Pengaturan Batch / Gelombang Pre-Order</x-slot>

    <div class="space-y-6">
        <!-- Header & Action -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <div>
                <h2 class="font-black text-sm text-amerta-navy">Daftar Gelombang PO</h2>
                <p class="text-xs text-amerta-muted font-medium">Kelola periode aktif, batas tanggal, dan batas kuota pemesanan atribut.</p>
            </div>
            <x-button href="/admin/batch/create" variant="primary" size="sm">
                + Buat Batch / Gelombang Baru
            </x-button>
        </div>

        <!-- Batch Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- BATCH CARD 1 (Active) -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo space-y-4">
                <div class="flex justify-between items-start border-b-2 border-amerta-border pb-3">
                    <div>
                        <span class="bg-emerald-500 text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy uppercase tracking-wider">
                            ● SEDANG BERJALAN
                        </span>
                        <h3 class="font-black text-lg text-amerta-navy mt-1">Gelombang 1 AMERTA 2026</h3>
                    </div>
                    <span class="bg-amerta-surface border border-amerta-navy text-xs font-mono font-black px-2 py-1 rounded">
                        #BATCH-01
                    </span>
                </div>

                <div class="space-y-2 text-xs font-bold text-amerta-navy">
                    <div class="flex justify-between">
                        <span class="text-amerta-muted">Periode PO:</span>
                        <span>01 Ags 2026 — 15 Ags 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amerta-muted">Estimasi Selesai:</span>
                        <span>25 Ags 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amerta-muted">Penggunaan Kuota:</span>
                        <span class="text-amerta-pink font-black">75 / 150 Unit (50%)</span>
                    </div>
                </div>

                <!-- Progress Bar Kuota -->
                <div class="w-full bg-amerta-surface border-2 border-amerta-navy rounded-full h-3 overflow-hidden">
                    <div class="bg-amerta-pink h-full rounded-full" style="width: 50%"></div>
                </div>

                <div class="flex items-center justify-between pt-2 border-t border-amerta-border">
                    <span class="text-[10px] font-bold text-amerta-muted">Terhubung ke 4 Produk</span>
                    <div class="space-x-2">
                        <a href="/admin/batch/1/edit" class="text-xs font-extrabold text-amerta-primary hover:underline">Edit Batch</a>
                        <button class="text-xs font-extrabold text-red-600 hover:underline">Tutup Batch</button>
                    </div>
                </div>
            </div>

            <!-- BATCH CARD 2 (Upcoming / Draft) -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo space-y-4">
                <div class="flex justify-between items-start border-b-2 border-amerta-border pb-3">
                    <div>
                        <span class="bg-amber-400 text-amerta-navy text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy uppercase tracking-wider">
                            ⏳ MENDATANG
                        </span>
                        <h3 class="font-black text-lg text-amerta-navy mt-1">Gelombang 2 AMERTA (Pelunasan & Susulan)</h3>
                    </div>
                    <span class="bg-amerta-surface border border-amerta-navy text-xs font-mono font-black px-2 py-1 rounded">
                        #BATCH-02
                    </span>
                </div>

                <div class="space-y-2 text-xs font-bold text-amerta-navy">
                    <div class="flex justify-between">
                        <span class="text-amerta-muted">Periode PO:</span>
                        <span>16 Ags 2026 — 28 Ags 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amerta-muted">Estimasi Selesai:</span>
                        <span>05 Sep 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-amerta-muted">Penggunaan Kuota:</span>
                        <span class="text-amerta-navy font-black">Unlimited (Tanpa Batas Kuota)</span>
                    </div>
                </div>

                <!-- Unlimited Badge Bar -->
                <div class="w-full bg-amerta-surface border-2 border-amerta-navy rounded-full h-3 flex items-center justify-center text-[8px] font-black text-amerta-navy">
                    KUOTA UNLIMITED (NULL)
                </div>

                <div class="flex items-center justify-between pt-2 border-t border-amerta-border">
                    <span class="text-[10px] font-bold text-amerta-muted">Belum Ada Pesanan</span>
                    <div class="space-x-2">
                        <a href="/admin/batch/2/edit" class="text-xs font-extrabold text-amerta-primary hover:underline">Edit Batch</a>
                        <button class="text-xs font-extrabold text-red-600 hover:underline">Hapus</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
