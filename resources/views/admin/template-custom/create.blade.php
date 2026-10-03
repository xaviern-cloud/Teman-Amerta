<x-admin-layout>
    <x-slot name="title">Buat Template Form - Admin TemanAmerta</x-slot>
    <x-slot name="header">🛠️ Dynamic Form Builder Template</x-slot>

    <div class="max-w-4xl mx-auto space-y-6">
        <form action="/admin/template-kustom" method="POST" class="space-y-6">
            @csrf

            <!-- HEADER TEMPLATE -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-4">
                <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                    1. Pengaturan Utama Template
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Nama Template <span class="text-amerta-pink">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Contoh: Form Custom ID Card AMERTA" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Deskripsi / Petunjuk Pengisian
                        </label>
                        <input type="text" name="description" placeholder="Contoh: Isikan data sesuai KTP/KTM resmi" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">
                    </div>
                </div>
            </div>

            <!-- DYNAMIC FIELD BUILDER -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo space-y-4">
                <div class="flex items-center justify-between border-b-2 border-amerta-border pb-2">
                    <div>
                        <h2 class="font-black text-base text-amerta-navy">2. Elemen Field Input Dinamis</h2>
                        <p class="text-xs text-amerta-muted font-medium">Susun pertanyaan atau berkas yang wajib diisi/diunggah Customer.</p>
                    </div>
                    <button type="button" class="text-xs font-black bg-amerta-pink text-white border-2 border-amerta-navy px-3 py-1.5 rounded-lg shadow-neo-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                        + Tambah Field Baru
                    </button>
                </div>

                <!-- FIELD LIST ITEM 1 (Text Field) -->
                <div class="bg-amerta-surface border-2 border-amerta-navy rounded-xl p-4 shadow-neo-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-amerta-navy/20 pb-2">
                        <span class="bg-amerta-navy text-white text-[10px] font-mono font-black px-2 py-0.5 rounded">
                            FIELD #1
                        </span>
                        <button type="button" class="text-xs font-black text-red-600 hover:underline">Hapus Field</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                        <div class="md:col-span-4">
                            <label class="block text-[10px] font-black text-amerta-muted mb-1">Label Input Field</label>
                            <input type="text" name="fields[0][label]" value="Nama Lengkap Customer" class="w-full px-2.5 py-1.5 bg-white border border-amerta-navy rounded text-xs font-bold text-amerta-navy">
                        </div>

                        <div class="md:col-span-3">
                            <label class="block text-[10px] font-black text-amerta-muted mb-1">Tipe Input</label>
                            <select name="fields[0][type]" class="w-full px-2.5 py-1.5 bg-white border border-amerta-navy rounded text-xs font-bold text-amerta-navy">
                                <option value="text" selected>Text Biasa</option>
                                <option value="number">Angka / NIM</option>
                                <option value="select">Pilihan (Dropdown)</option>
                                <option value="file">Upload File / Foto</option>
                            </select>
                        </div>

                        <div class="md:col-span-3">
                            <label class="block text-[10px] font-black text-amerta-muted mb-1">Placeholder / Contoh</label>
                            <input type="text" name="fields[0][placeholder]" value="Ahmad Dahlan" class="w-full px-2.5 py-1.5 bg-white border border-amerta-navy rounded text-xs font-bold text-amerta-navy">
                        </div>

                        <div class="md:col-span-2 flex items-center pt-4">
                            <label class="flex items-center gap-1.5 text-xs font-black text-amerta-navy cursor-pointer">
                                <input type="checkbox" name="fields[0][is_required]" value="1" checked class="rounded border-amerta-navy text-amerta-pink focus:ring-amerta-pink">
                                Wajib (Req)
                            </label>
                        </div>
                    </div>
                </div>

                <!-- FIELD LIST ITEM 2 (File Upload Field) -->
                <div class="bg-amerta-surface border-2 border-amerta-navy rounded-xl p-4 shadow-neo-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-amerta-navy/20 pb-2">
                        <span class="bg-amerta-navy text-white text-[10px] font-mono font-black px-2 py-0.5 rounded">
                            FIELD #2
                        </span>
                        <button type="button" class="text-xs font-black text-red-600 hover:underline">Hapus Field</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                        <div class="md:col-span-4">
                            <label class="block text-[10px] font-black text-amerta-muted mb-1">Label Input Field</label>
                            <input type="text" name="fields[1][label]" value="Unggah Pasfoto Formal (3x4)" class="w-full px-2.5 py-1.5 bg-white border border-amerta-navy rounded text-xs font-bold text-amerta-navy">
                        </div>

                        <div class="md:col-span-3">
                            <label class="block text-[10px] font-black text-amerta-muted mb-1">Tipe Input</label>
                            <select name="fields[1][type]" class="w-full px-2.5 py-1.5 bg-white border border-amerta-navy rounded text-xs font-bold text-amerta-navy">
                                <option value="text">Text Biasa</option>
                                <option value="number">Angka / NIM</option>
                                <option value="select">Pilihan (Dropdown)</option>
                                <option value="file" selected>Upload File / Foto</option>
                            </select>
                        </div>

                        <div class="md:col-span-3">
                            <label class="block text-[10px] font-black text-amerta-muted mb-1">Instruksi File</label>
                            <input type="text" name="fields[1][placeholder]" value="Format PNG/JPG max 2MB" class="w-full px-2.5 py-1.5 bg-white border border-amerta-navy rounded text-xs font-bold text-amerta-navy">
                        </div>

                        <div class="md:col-span-2 flex items-center pt-4">
                            <label class="flex items-center gap-1.5 text-xs font-black text-amerta-navy cursor-pointer">
                                <input type="checkbox" name="fields[1][is_required]" value="1" checked class="rounded border-amerta-navy text-amerta-pink focus:ring-amerta-pink">
                                Wajib (Req)
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ACTION BUTTONS -->
            <div class="flex justify-end gap-3 pt-2">
                <x-button href="/admin/template-kustom" variant="secondary" size="md">
                    Batal
                </x-button>
                <x-button type="submit" variant="pink" size="md">
                    Simpan Template Form 💾
                </x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
