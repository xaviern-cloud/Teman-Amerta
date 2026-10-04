<x-admin-layout>
    <x-slot name="title">Tambah Produk Baru - Admin TemanAmerta</x-slot>
    <x-slot name="header">✨ Form Tambah Produk & Varian Baru</x-slot>

    <div class="max-w-4xl mx-auto">
        <form action="/admin/produk" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- INFORMASI UTAMA PRODUK -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-4">
                <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                    1. Informasi Dasar Produk
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Nama Produk <span class="text-amerta-pink">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Contoh: Topi Rimba Fakultas" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Kategori Produk <span class="text-amerta-pink">*</span>
                        </label>
                        <select name="category_id" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="1">Atribut Resmi PKKMB</option>
                            <option value="2">Merchandise Fakultas</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                        Deskripsi Lengkap Produk <span class="text-amerta-pink">*</span>
                    </label>
                    <textarea name="description" rows="4" placeholder="Jelaskan spesifikasi bahan, ukuran dasar, dan detail produk..." class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Harga Base / Minimum (Rp) <span class="text-amerta-pink">*</span>
                        </label>
                        <input type="number" name="base_price" placeholder="50000" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Unggah Foto Produk Utama <span class="text-amerta-pink">*</span>
                        </label>
                        <input type="file" name="image" class="w-full text-xs text-amerta-navy font-bold bg-amerta-surface p-2 rounded-lg border-2 border-amerta-navy shadow-neo-sm cursor-pointer file:mr-2 file:py-1 file:px-2 file:rounded file:border-1 file:border-amerta-navy file:bg-amerta-primary file:text-white file:font-bold" required>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE KUSTOMISASI ATTACHMENT -->
            <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-3">
                <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-navy pb-2">
                    2. Pengaturan Form Kustomisasi Data
                </h2>
                <p class="text-xs text-amerta-muted font-medium">Apakah produk ini membutuhkan Customer mengunggah/mengisi data personalisasi (misal: Nama, NIM, Foto, Sertifikat)?</p>

                <div>
                    <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                        Pilih Template Kustomisasi (Opsional)
                    </label>
                    <select name="custom_template_id" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">
                        <option value="">-- Tanpa Form Kustomisasi (Produk Standar) --</option>
                        <option value="1">Template Standard ID Card AMERTA 2026</option>
                        <option value="2">Template Sertifikat & Bio Fakultas Kedokteran</option>
                    </select>
                </div>
            </div>

            <!-- VARIAN PRODUK MANAGER -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-4">
                <div class="flex items-center justify-between border-b-2 border-amerta-border pb-2">
                    <h2 class="font-black text-base text-amerta-navy">
                        3. Pengaturan Varian Produk (Ukuran/Warna/Opsi)
                    </h2>
                    <button type="button" class="text-xs font-black bg-amerta-surface border-2 border-amerta-navy px-3 py-1 rounded-lg hover:bg-amerta-navy hover:text-white transition-colors">
                        + Tambah Baris Varian
                    </button>
                </div>

                <div class="space-y-3">
                    <div class="grid grid-cols-12 gap-2 items-center bg-amerta-surface p-3 border-2 border-amerta-navy rounded-lg text-xs">
                        <div class="col-span-4">
                            <label class="block text-[10px] font-black text-amerta-muted">Nama Varian</label>
                            <input type="text" name="variants[0][name]" placeholder="Misal: Ukuran L - Warna Navy" class="w-full px-2 py-1.5 bg-white border border-amerta-navy rounded font-bold">
                        </div>
                        <div class="col-span-3">
                            <label class="block text-[10px] font-black text-amerta-muted">Harga Tambahan (+Rp)</label>
                            <input type="number" name="variants[0][additional_price]" value="0" class="w-full px-2 py-1.5 bg-white border border-amerta-navy rounded font-bold">
                        </div>
                        <div class="col-span-3">
                            <label class="block text-[10px] font-black text-amerta-muted">Stok Batch</label>
                            <input type="number" name="variants[0][stock]" value="100" class="w-full px-2 py-1.5 bg-white border border-amerta-navy rounded font-bold">
                        </div>
                        <div class="col-span-2 text-right pt-3">
                            <button type="button" class="text-red-600 font-extrabold hover:underline">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ACTION BUTTON -->
            <div class="flex justify-end gap-3 pt-2">
                <x-button href="/admin/produk" variant="secondary" size="md">
                    Batal
                </x-button>
                <x-button type="submit" variant="pink" size="md">
                    Simpan Produk 💾
                </x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
