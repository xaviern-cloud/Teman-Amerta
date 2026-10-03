<x-admin-layout>
    <x-slot name="title">Kelola Kategori - Admin TemanAmerta</x-slot>
    <x-slot name="header">📁 Kelola Kategori Produk</x-slot>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- LEFT: Form Tambah Kategori -->
        <div class="lg:col-span-4">
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo sticky top-6">
                <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                    + Tambah Kategori Baru
                </h2>

                <form action="/admin/kategori" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Nama Kategori <span class="text-amerta-pink">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Contoh: Atribut Resmi UNAIR" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Slug (URL Friendly)
                        </label>
                        <input type="text" name="slug" placeholder="atribut-resmi-unair" class="w-full px-3 py-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Deskripsi Kategori
                        </label>
                        <textarea name="description" rows="3" placeholder="Deskripsi singkat..." class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full py-2.5 bg-amerta-primary text-white font-black text-xs rounded-lg border-2 border-amerta-navy shadow-neo-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                        Simpan Kategori 🚀
                    </button>
                </form>
            </div>
        </div>

        <!-- RIGHT: Tabel Daftar Kategori -->
        <div class="lg:col-span-8">
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                    Daftar Kategori Aktif
                </h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs font-bold text-amerta-navy border-collapse">
                        <thead>
                            <tr class="border-b-2 border-amerta-navy bg-amerta-surface">
                                <th class="p-3">#</th>
                                <th class="p-3">Nama Kategori</th>
                                <th class="p-3">Slug</th>
                                <th class="p-3">Jumlah Produk</th>
                                <th class="p-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y border-b-2 border-amerta-navy">
                            <tr>
                                <td class="p-3 font-mono">1</td>
                                <td class="p-3 font-black text-amerta-navy">Atribut Resmi PKKMB</td>
                                <td class="p-3 font-mono text-amerta-muted">atribut-resmi-pkkmb</td>
                                <td class="p-3"><span class="bg-blue-100 text-amerta-navy px-2 py-0.5 rounded border border-amerta-navy font-black">5 Produk</span></td>
                                <td class="p-3 text-right space-x-2">
                                    <button class="text-amerta-primary hover:underline font-extrabold">Edit</button>
                                    <button class="text-red-600 hover:underline font-extrabold">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 font-mono">2</td>
                                <td class="p-3 font-black text-amerta-navy">Merchandise Fakultas</td>
                                <td class="p-3 font-mono text-amerta-muted">merchandise-fakultas</td>
                                <td class="p-3"><span class="bg-blue-100 text-amerta-navy px-2 py-0.5 rounded border border-amerta-navy font-black">8 Produk</span></td>
                                <td class="p-3 text-right space-x-2">
                                    <button class="text-amerta-primary hover:underline font-extrabold">Edit</button>
                                    <button class="text-red-600 hover:underline font-extrabold">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
