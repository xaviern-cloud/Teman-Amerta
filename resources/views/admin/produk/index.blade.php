<x-admin-layout>
    <x-slot name="title">Kelola Produk - Admin TemanAmerta</x-slot>
    <x-slot name="header">👕 Daftar Master Produk & Varian</x-slot>

    <div class="space-y-6">
        <!-- Top Toolbar -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-white border-3 border-amerta-navy rounded-xl p-4 shadow-neo">
            <div class="flex items-center gap-3 w-full sm:w-auto">
                <input type="text" placeholder="Cari nama produk..." class="px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy w-full sm:w-64 focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">
                <select class="px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy shadow-neo-sm">
                    <option value="">Semua Kategori</option>
                    <option value="1">Atribut Resmi PKKMB</option>
                    <option value="2">Merchandise Fakultas</option>
                </select>
            </div>
            <x-button href="/admin/produk/create" variant="primary" size="sm">
                + Tambah Produk Baru
            </x-button>
        </div>

        <!-- Tabel Daftar Produk -->
        <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-bold text-amerta-navy border-collapse">
                    <thead>
                        <tr class="border-b-2 border-amerta-navy bg-amerta-surface">
                            <th class="p-3">Produk</th>
                            <th class="p-3">Kategori</th>
                            <th class="p-3">Harga Base</th>
                            <th class="p-3">Tipe Kustomisasi</th>
                            <th class="p-3">Varian</th>
                            <th class="p-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-b-2 border-amerta-navy">
                        <tr>
                            <td class="p-3 flex items-center gap-3">
                                <div class="w-10 h-10 rounded border border-amerta-navy bg-amerta-surface flex items-center justify-center font-black">
                                    🎴
                                </div>
                                <div>
                                    <span class="font-black text-amerta-navy block">ID Card Custom AMERTA + Tali Lanyard</span>
                                    <span class="text-[10px] text-amerta-muted font-mono">SKU: ID-AMERTA-2026</span>
                                </div>
                            </td>
                            <td class="p-3">Atribut Resmi PKKMB</td>
                            <td class="p-3 font-mono font-black">Rp15.000</td>
                            <td class="p-3">
                                <span class="bg-amerta-pink text-white border border-amerta-navy text-[10px] font-black px-2 py-0.5 rounded-full">
                                    📝 Template ID Card
                                </span>
                            </td>
                            <td class="p-3">
                                <span class="bg-amerta-surface border border-amerta-navy text-[10px] font-bold px-2 py-0.5 rounded">
                                    3 Warna / Fakultas
                                </span>
                            </td>
                            <td class="p-3 text-right space-x-2">
                                <a href="/admin/produk/1/edit" class="text-amerta-primary hover:underline font-extrabold">Edit</a>
                                <button class="text-red-600 hover:underline font-extrabold">Hapus</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-3 flex items-center gap-3">
                                <div class="w-10 h-10 rounded border border-amerta-navy bg-amerta-surface flex items-center justify-center font-black">
                                    👕
                                </div>
                                <div>
                                    <span class="font-black text-amerta-navy block">Kaos PKKMB Resmi UNAIR 2026</span>
                                    <span class="text-[10px] text-amerta-muted font-mono">SKU: KAOS-UNAIR-2026</span>
                                </div>
                            </td>
                            <td class="p-3">Atribut Resmi PKKMB</td>
                            <td class="p-3 font-mono font-black">Rp65.000</td>
                            <td class="p-3">
                                <span class="bg-gray-100 text-amerta-muted border border-amerta-navy text-[10px] font-bold px-2 py-0.5 rounded-full">
                                    Tanpa Form Kustom
                                </span>
                            </td>
                            <td class="p-3">
                                <span class="bg-amerta-surface border border-amerta-navy text-[10px] font-bold px-2 py-0.5 rounded">
                                    S, M, L, XL, XXL
                                </span>
                            </td>
                            <td class="p-3 text-right space-x-2">
                                <a href="/admin/produk/2/edit" class="text-amerta-primary hover:underline font-extrabold">Edit</a>
                                <button class="text-red-600 hover:underline font-extrabold">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
