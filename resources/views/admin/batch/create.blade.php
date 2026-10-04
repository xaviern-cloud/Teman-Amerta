<x-admin-layout>
    <x-slot name="title">Tambah Batch Pre-Order - Admin TemanAmerta</x-slot>
    <x-slot name="header">🗓️ Buat Gelombang / Batch Pre-Order Baru</x-slot>

    <div class="max-w-3xl mx-auto">
        <form action="/admin/batch" method="POST" class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-5">
            @csrf

            <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2">
                Pengaturan Periode & Kuota Gelombang
            </h2>

            <div>
                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                    Nama Batch / Gelombang <span class="text-amerta-pink">*</span>
                </label>
                <input type="text" name="name" placeholder="Contoh: Gelombang 1 AMERTA 2026" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                        Tanggal Mulai PO <span class="text-amerta-pink">*</span>
                    </label>
                    <input type="date" name="start_date" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                </div>

                <div>
                    <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                        Tanggal Selesai / Penutupan PO <span class="text-amerta-pink">*</span>
                    </label>
                    <input type="date" name="end_date" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                        Estimasi Selesai Produksi / Siap Ambil <span class="text-amerta-pink">*</span>
                    </label>
                    <input type="date" name="estimated_completion_date" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                </div>

                <div>
                    <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                        Maksimal Kuota Order (Kosongkan/Isi 0 jika Tidak Terbatas)
                    </label>
                    <input type="number" name="quota" placeholder="Contoh: 150 atau kosongkan" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">
                    <span class="text-[10px] text-amerta-muted font-bold block mt-1">Sesuai arsitektur, kuota NULL melambangkan kuota unlimited.</span>
                </div>
            </div>

            <div>
                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                    Pilih Produk yang Masuk ke Dalam Batch Ini
                </label>
                <div class="bg-amerta-surface border-2 border-amerta-navy rounded-lg p-3 space-y-2 max-h-40 overflow-y-auto">
                    <label class="flex items-center gap-2 text-xs font-bold text-amerta-navy cursor-pointer">
                        <input type="checkbox" name="products[]" value="1" checked class="rounded border-amerta-navy text-amerta-pink focus:ring-amerta-pink">
                        ID Card Custom AMERTA + Tali Lanyard
                    </label>
                    <label class="flex items-center gap-2 text-xs font-bold text-amerta-navy cursor-pointer">
                        <input type="checkbox" name="products[]" value="2" checked class="rounded border-amerta-navy text-amerta-pink focus:ring-amerta-pink">
                        Kaos PKKMB Resmi UNAIR 2026
                    </label>
                </div>
            </div>

            <!-- ACTION BUTTONS -->
            <div class="flex justify-end gap-3 pt-4 border-t border-amerta-border">
                <x-button href="/admin/batch" variant="secondary" size="md">
                    Batal
                </x-button>
                <x-button type="submit" variant="pink" size="md">
                    Simpan Batch PO 💾
                </x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
