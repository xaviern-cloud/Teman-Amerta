<x-app-layout>
    <x-slot name="title">ID Card Custom AMERTA - TemanAmerta</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs font-bold text-amerta-muted mb-6">
            <a href="/" class="hover:text-amerta-navy">Beranda</a>
            <span>/</span>
            <a href="/#katalog" class="hover:text-amerta-navy">Katalog</a>
            <span>/</span>
            <span class="text-amerta-navy">ID Card Custom AMERTA + Tali Lanyard</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

            <!-- LEFT COLUMN: Product Images & Guidebook Badge -->
            <div class="lg:col-span-5">
                <div class="bg-white border-3 border-amerta-navy rounded-2xl p-6 shadow-neo mb-6 text-center">
                    <div class="h-72 w-full bg-amerta-surface rounded-xl border-2 border-amerta-navy flex items-center justify-center mb-4 overflow-hidden">
                        <!-- Preview Image Placeholder -->
                        <div class="text-amerta-muted text-sm font-bold flex flex-col items-center gap-2">
                            <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6"></path>
                            </svg>
                            <span>Preview ID Card AMERTA</span>
                        </div>
                    </div>
                    <span class="inline-block bg-amerta-pink text-white text-xs font-black px-3 py-1 rounded-full border border-amerta-navy">
                        ✨ Membutuhkan Pengisian Data Kustom
                    </span>
                </div>

                <!-- Info Guidebook Banner -->
                <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-4 shadow-neo-sm">
                    <h4 class="font-black text-sm text-amerta-navy mb-1 flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-amerta-pink" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Sesuai Guidebook Resmi AMERTA
                    </h4>
                    <p class="text-xs text-amerta-muted leading-relaxed mb-3">
                        Format dan layout ID Card ini disesuaikan dengan aturan penugasan resmi universitas.
                    </p>
                    <a href="#" class="text-xs font-bold text-amerta-pink underline hover:text-amerta-navy">
                        📄 Unduh / Lihat Template Guidebook PDF
                    </a>
                </div>
            </div>

            <!-- RIGHT COLUMN: Product Form & Options -->
            <div class="lg:col-span-7">
                <div class="mb-6">
                    <span class="text-xs font-extrabold text-amerta-pink uppercase tracking-wider block mb-1">
                        Atribut & ID Card
                    </span>
                    <h1 class="text-2xl sm:text-3xl font-black text-amerta-navy mb-2">
                        ID Card Custom AMERTA + Tali Lanyard
                    </h1>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-black text-amerta-navy">Rp15.000</span>
                        <span class="bg-amerta-primary text-white text-xs font-bold px-2.5 py-0.5 rounded border border-amerta-navy">
                            Stok Tersedia (Batch 1)
                        </span>
                    </div>
                </div>

                <form action="/cart/add" method="POST" class="space-y-6">
                    @csrf

                    <!-- SECTION 1: Varian Regular (Ukuran/Tipe) -->
                    <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo-sm">
                        <label class="block text-sm font-black text-amerta-navy mb-2">
                            Pilih Tali Lanyard / Warna:
                        </label>
                        <div class="grid grid-cols-3 gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="variant_id" value="1" class="peer sr-only" checked>
                                <div class="p-3 text-center rounded-lg border-2 border-amerta-navy text-xs font-bold peer-checked:bg-amerta-primary peer-checked:text-white peer-checked:shadow-neo-sm transition-all">
                                    Navy (FST/FKM)
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="variant_id" value="2" class="peer sr-only">
                                <div class="p-3 text-center rounded-lg border-2 border-amerta-navy text-xs font-bold peer-checked:bg-amerta-primary peer-checked:text-white peer-checked:shadow-neo-sm transition-all">
                                    Merah (FK/FKG)
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="variant_id" value="3" class="peer sr-only">
                                <div class="p-3 text-center rounded-lg border-2 border-amerta-navy text-xs font-bold peer-checked:bg-amerta-primary peer-checked:text-white peer-checked:shadow-neo-sm transition-all">
                                    Kuning (FEB/FH)
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- SECTION 2: Custom Product Dynamic Fields (FE-05) -->
                    <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                        <div class="border-b-2 border-amerta-navy pb-3 mb-4">
                            <h3 class="font-black text-base text-amerta-navy flex items-center gap-2">
                                <span>📝</span> Form Data Personalisasi ID Card
                            </h3>
                            <p class="text-xs text-amerta-muted font-medium mt-0.5">
                                Isikan data diri kamu dengan benar sesuai dengan penugasan AMERTA.
                            </p>
                        </div>

                        <div class="space-y-4">
                            <!-- Dynamic Input: TEXT -->
                            <div>
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    Nama Lengkap (Sesuai KTM) <span class="text-amerta-pink">*</span>
                                </label>
                                <input type="text" name="custom_fields[nama_lengkap]" placeholder="Contoh: Bariq Hafizh" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                            </div>

                            <!-- Dynamic Input: SELECT -->
                            <div>
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    Fakultas <span class="text-amerta-pink">*</span>
                                </label>
                                <select name="custom_fields[fakultas]" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                                    <option value="">-- Pilih Fakultas --</option>
                                    <option value="Sains dan Teknologi">Fakultas Sains dan Teknologi</option>
                                    <option value="Kedokteran">Fakultas Kedokteran</option>
                                    <option value="Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                                    <option value="Hukum">Fakultas Hukum</option>
                                </select>
                            </div>

                            <!-- Dynamic Input: NUMBER -->
                            <div>
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    NIM (Nomor Induk Mahasiswa) <span class="text-amerta-pink">*</span>
                                </label>
                                <input type="number" name="custom_fields[nim]" placeholder="Contoh: 162112345678" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                            </div>

                            <!-- Dynamic Input: FILE (Pasfoto) -->
                            <div>
                                <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                    Upload Pasfoto Resmi (Background Merah/Biru) <span class="text-amerta-pink">*</span>
                                </label>
                                <input type="file" name="custom_fields[pasfoto]" class="w-full text-xs text-amerta-navy font-bold bg-white p-2 rounded-lg border-2 border-amerta-navy shadow-neo-sm cursor-pointer file:mr-3 file:py-1 file:px-3 file:rounded-md file:border-1 file:border-amerta-navy file:bg-amerta-primary file:text-white file:font-bold" required>
                                <span class="text-[10px] text-amerta-muted block mt-1">Format: JPG/PNG, maks 2MB</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: Quantity & Add to Cart Action -->
                    <div class="flex items-center gap-4 pt-2">
                        <div class="w-32">
                            <label class="block text-xs font-extrabold text-amerta-navy mb-1">Jumlah</label>
                            <div class="flex items-center border-2 border-amerta-navy rounded-lg bg-white overflow-hidden shadow-neo-sm">
                                <button type="button" class="px-3 py-2 font-black text-amerta-navy hover:bg-amerta-surface">-</button>
                                <input type="number" name="quantity" value="1" min="1" class="w-full text-center font-black text-sm text-amerta-navy focus:outline-none" readonly>
                                <button type="button" class="px-3 py-2 font-black text-amerta-navy hover:bg-amerta-surface">+</button>
                            </div>
                        </div>

                        <div class="flex-grow pt-5">
                            <x-button type="submit" variant="pink" size="lg" class="w-full">
                                🛒 Tambah ke Keranjang
                            </x-button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
