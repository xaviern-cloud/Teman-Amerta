<x-admin-layout>
    <x-slot name="title">Kelola Pesanan - Admin TemanAmerta</x-slot>
    <x-slot name="header">📦 Manajemen Lifecycle & Status Pesanan</x-slot>

    <div class="space-y-6">
        <!-- Filter Bar -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <div class="flex flex-wrap items-center gap-2">
                <input type="text" placeholder="Cari Kode Order / Nama..." class="px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">
                <select class="px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy shadow-neo-sm">
                    <option value="">Semua Status Order</option>
                    <option value="UNPAID">UNPAID</option>
                    <option value="WAITING_VERIFICATION">WAITING_VERIFICATION</option>
                    <option value="PAID">PAID</option>
                    <option value="PROCESSING">PROCESSING</option>
                    <option value="READY_FOR_PICKUP">READY_FOR_PICKUP</option>
                    <option value="COMPLETED">COMPLETED</option>
                </select>
            </div>
            <a href="/admin/pesanan/export" class="px-3 py-2 bg-amerta-primary text-white border-2 border-amerta-navy rounded-lg text-xs font-black shadow-neo-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                📥 Export Rekap Excel/CSV
            </a>
        </div>

        <!-- Tabel Pesanan Master -->
        <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-bold text-amerta-navy border-collapse">
                    <thead>
                        <tr class="border-b-2 border-amerta-navy bg-amerta-surface">
                            <th class="p-3">Kode Pesanan</th>
                            <th class="p-3">Pemesan</th>
                            <th class="p-3">Total Tagihan</th>
                            <th class="p-3">Status Saat Ini</th>
                            <th class="p-3">Ubah Lifecycle Status</th>
                            <th class="p-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-b-2 border-amerta-navy">
                        <tr>
                            <td class="p-3 font-mono font-black text-amerta-navy">
                                #ORD-20260810-001
                                <span class="text-[10px] text-amerta-muted block font-sans">Gelombang 1 AMERTA</span>
                            </td>
                            <td class="p-3">
                                <span class="block font-black">Bariq Hafizh</span>
                                <span class="text-[10px] text-amerta-muted font-mono">162112345678</span>
                            </td>
                            <td class="p-3 font-mono font-black">Rp80.000</td>
                            <td class="p-3">
                                <span class="bg-blue-100 text-blue-900 border border-amerta-navy px-2 py-0.5 rounded-full text-[10px] font-black">
                                    PROCESSING
                                </span>
                            </td>
                            <td class="p-3">
                                <form action="/admin/pesanan/1/status" method="POST" class="flex items-center gap-2">
                                    @csrf
                                    <select name="status" class="px-2 py-1 bg-amerta-surface border border-amerta-navy rounded text-[11px] font-bold">
                                        <option value="UNPAID">UNPAID</option>
                                        <option value="WAITING_VERIFICATION">WAITING_VERIFICATION</option>
                                        <option value="PAID">PAID</option>
                                        <option value="PROCESSING" selected>PROCESSING</option>
                                        <option value="READY_FOR_PICKUP">READY_FOR_PICKUP</option>
                                        <option value="COMPLETED">COMPLETED</option>
                                    </select>
                                    <button type="submit" class="px-2 py-1 bg-amerta-navy text-white text-[10px] font-black rounded border border-amerta-navy hover:bg-amerta-pink">
                                        Update
                                    </button>
                                </form>
                            </td>
                            <td class="p-3 text-right">
                                <a href="/admin/pesanan/1" class="text-amerta-pink hover:underline font-extrabold">Detail Pesanan →</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
