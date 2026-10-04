<x-admin-layout>
    <x-slot name="title">Admin Dashboard - TemanAmerta</x-slot>
    <x-slot name="header">📊 Summary Metrics & Dashboard Operational</x-slot>

    <!-- METRICS CARDS GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

        <!-- Metric 1 -->
        <div class="bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <span class="text-xs font-extrabold text-amerta-muted block mb-1">Total Pesanan Masuk</span>
            <div class="flex items-baseline justify-between">
                <span class="text-3xl font-black text-amerta-navy">67</span>
                <span class="text-xs font-bold text-emerald-600">+12% minggu ini</span>
            </div>
        </div>

        <!-- Metric 2 -->
        <div class="bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <span class="text-xs font-extrabold text-amerta-muted block mb-1">Perlu Verifikasi Bayar</span>
            <div class="flex items-baseline justify-between">
                <span class="text-3xl font-black text-amber-600">3</span>
                <span class="bg-amber-100 text-amber-900 border border-amerta-navy text-[10px] font-black px-2 py-0.5 rounded-full">Pending</span>
            </div>
        </div>

        <!-- Metric 3 -->
        <div class="bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <span class="text-xs font-extrabold text-amerta-muted block mb-1">Dalam Proses Produksi</span>
            <div class="flex items-baseline justify-between">
                <span class="text-3xl font-black text-amerta-navy">42</span>
                <span class="text-xs font-bold text-amerta-muted">Item / Unit</span>
            </div>
        </div>

        <!-- Metric 4 -->
        <div class="bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <span class="text-xs font-extrabold text-amerta-muted block mb-1">Total Gross Revenue</span>
            <div class="flex items-baseline justify-between">
                <span class="text-2xl font-black text-amerta-pink">Rp1.799.000</span>
            </div>
        </div>

    </div>

    <!-- MAIN DASHBOARD CONTENT GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

        <!-- LEFT: Recent Orders & Payment Verification Queue -->
        <div class="lg:col-span-8 space-y-6">

            <!-- Quick Verification Alert Box -->
            <div class="bg-amber-50 border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                <div class="flex items-center justify-between mb-3 border-b-2 border-amerta-navy/20 pb-2">
                    <h2 class="font-black text-sm text-amber-900 flex items-center gap-2">
                        <span>⏳</span> Verifikasi Pembayaran Terbaru (3 Perlu Diperiksa)
                    </h2>
                    <a href="/admin/pembayaran" class="text-xs font-black text-amerta-pink hover:underline">Lihat Semua →</a>
                </div>

                <div class="space-y-3">
                    <div class="bg-white border-2 border-amerta-navy rounded-lg p-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs">
                        <div>
                            <span class="font-mono font-black text-amerta-navy">#ORD-20260810-001</span>
                            <span class="text-amerta-muted font-bold block">Customer: Bariq Hafizh | Transfer: Rp80.000 (LUNAS)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="#" class="px-2.5 py-1 bg-amerta-surface border border-amerta-navy font-bold rounded hover:bg-gray-200">Lihat Bukti</a>
                            <button class="px-2.5 py-1 bg-emerald-500 text-white font-bold rounded border border-amerta-navy hover:bg-emerald-600">Terima</button>
                            <button class="px-2.5 py-1 bg-red-500 text-white font-bold rounded border border-amerta-navy hover:bg-red-600">Tolak</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                <h2 class="font-black text-base text-amerta-navy mb-4 border-b-2 border-amerta-border pb-2">
                    📦 Pesanan Masuk Terkini
                </h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs font-bold text-amerta-navy border-collapse">
                        <thead>
                            <tr class="border-b-2 border-amerta-navy bg-amerta-surface">
                                <th class="p-2.5">Kode Order</th>
                                <th class="p-2.5">Customer</th>
                                <th class="p-2.5">Total Tagihan</th>
                                <th class="p-2.5">Status Order</th>
                                <th class="p-2.5 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y border-b-2 border-amerta-navy">
                            <tr>
                                <td class="p-2.5 font-mono font-black">#ORD-20260810-001</td>
                                <td class="p-2.5">Bariq Hafizh</td>
                                <td class="p-2.5">Rp80.000</td>
                                <td class="p-2.5">
                                    <span class="bg-blue-100 text-blue-900 border border-amerta-navy px-2 py-0.5 rounded-full text-[10px]">Diproses</span>
                                </td>
                                <td class="p-2.5 text-right">
                                    <a href="/admin/pesanan/1" class="text-amerta-pink hover:underline font-extrabold">Detail →</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2.5 font-mono font-black">#ORD-20260805-089</td>
                                <td class="p-2.5">Safa Panjaitan</td>
                                <td class="p-2.5">Rp120.000</td>
                                <td class="p-2.5">
                                    <span class="bg-amber-100 text-amber-900 border border-amerta-navy px-2 py-0.5 rounded-full text-[10px]">Verifikasi Bayar</span>
                                </td>
                                <td class="p-2.5 text-right">
                                    <a href="/admin/pesanan/2" class="text-amerta-pink hover:underline font-extrabold">Detail →</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- RIGHT: Active Batch & Quick Actions -->
        <div class="lg:col-span-4 space-y-6">

            <!-- Active Batch Status Card -->
            <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                <h3 class="font-black text-sm text-amerta-navy border-b-2 border-amerta-navy pb-2 mb-3">
                    🗓️ Gelombang / Batch Aktif
                </h3>
                <div class="space-y-2 text-xs font-bold text-amerta-navy">
                    <p class="font-black text-base text-amerta-pink">Gelombang 1 AMERTA 2026</p>
                    <p class="text-amerta-muted font-medium">Periode: 01 Ags 2026 - 15 Ags 2026</p>
                    <div class="bg-white border-2 border-amerta-navy rounded p-2.5 mt-2">
                        <span class="text-[10px] text-amerta-muted block">Status Kuota Batch:</span>
                        <span class="font-black text-amerta-navy">75 / 150 Unit Terpesan</span>
                    </div>
                </div>
            </div>

            <!-- Quick Action Links -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo space-y-2">
                <h3 class="font-black text-sm text-amerta-navy border-b-2 border-amerta-border pb-2 mb-3">
                    ⚡ Akses Cepat Admin
                </h3>
                <a href="/admin/produk/create" class="block w-full text-center px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-black text-amerta-navy hover:bg-amerta-primary hover:text-white transition-all shadow-neo-sm">
                    + Tambah Produk Baru
                </a>
                <a href="/admin/template-kustom/create" class="block w-full text-center px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-black text-amerta-navy hover:bg-amerta-primary hover:text-white transition-all shadow-neo-sm">
                    + Buat Template Kustom
                </a>
                <a href="/admin/batch/create" class="block w-full text-center px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-black text-amerta-navy hover:bg-amerta-primary hover:text-white transition-all shadow-neo-sm">
                    + Buat Gelombang / Batch Baru
                </a>
            </div>

        </div>

    </div>

    <a href="{{ url('/admin/pengguna') }}">Ke Daftar Pengguna</a>

</x-admin-layout>
