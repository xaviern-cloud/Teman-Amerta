@php
    $catalogProducts = $produkList ?? collect([
        (object) [
            'nama' => 'ID Card AMERTA',
            'harga_dasar' => 14000,
            'deskripsi' => 'ID card siap cetak untuk kebutuhan penugasan AMERTA.',
            'kategori' => (object) ['nama' => 'Penugasan AMERTA'],
        ],
        (object) [
            'nama' => 'Logbook AMERTA',
            'harga_dasar' => 17000,
            'deskripsi' => 'Logbook dengan format yang mudah disesuaikan setelah guidebook terbit.',
            'kategori' => (object) ['nama' => 'Penugasan AMERTA'],
        ],
        (object) [
            'nama' => 'Kemeja Putih',
            'harga_dasar' => 64000,
            'deskripsi' => 'Kemeja putih untuk rangkaian kegiatan PKKMB.',
            'kategori' => (object) ['nama' => 'Pakaian'],
        ],
    ]);

    $catalogCategories = $kategoriList ?? collect([
        (object) ['id_kategori' => 'pakaian', 'nama' => 'Pakaian', 'produk_count' => 1],
        (object) ['id_kategori' => 'atribut', 'nama' => 'Atribut', 'produk_count' => 0],
        (object) ['id_kategori' => 'amerta', 'nama' => 'Penugasan AMERTA', 'produk_count' => 2],
    ]);
@endphp

<x-layouts.app title="Katalog — TemanAmerta">
    <section class="space-y-8">
        <header class="max-w-3xl space-y-3">
            <x-badge variant="yellow">Katalog perlengkapan</x-badge>
            <h1 class="font-display text-3xl font-bold text-brand-navy-dark sm:text-4xl">Pilih kebutuhan ospekmu</h1>
            <p class="font-medium leading-relaxed text-slate-600">
                Halaman ini siap menerima data dari controller. Saat data belum tersedia, kartu contoh digunakan untuk kebutuhan pengerjaan frontend dan pencocokan Figma.
            </p>
        </header>

        <nav class="flex gap-3 overflow-x-auto pb-2" aria-label="Filter kategori produk">
            <a href="{{ route('pages.catalog.index') }}" @class([
                'shrink-0 rounded-xl border-2 border-brand-navy px-4 py-2 text-sm font-bold shadow-neo-sm transition',
                'bg-brand-navy text-white' => blank($selectedCategory ?? null) || ($selectedCategory ?? null) === 'all',
                'bg-white text-brand-navy hover:bg-surface-muted' => filled($selectedCategory ?? null) && ($selectedCategory ?? null) !== 'all',
            ])>
                Semua Produk ({{ $totalProduk ?? $catalogProducts->count() }})
            </a>

            @foreach ($catalogCategories as $category)
                <a href="{{ route('pages.catalog.index', ['kategori' => $category->id_kategori]) }}" @class([
                    'shrink-0 rounded-xl border-2 border-brand-navy px-4 py-2 text-sm font-bold shadow-neo-sm transition',
                    'bg-brand-pink text-white' => (string) ($selectedCategory ?? '') === (string) $category->id_kategori,
                    'bg-white text-brand-navy hover:bg-surface-muted' => (string) ($selectedCategory ?? '') !== (string) $category->id_kategori,
                ])>
                    {{ $category->nama }} ({{ $category->produk_count }})
                </a>
            @endforeach
        </nav>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
    @forelse ($catalogProducts as $product)
        <x-product-card
            :title="$product->nama ?? $product->nama_produk"
            :price="'Rp ' . number_format((float) ($product->harga_dasar ?? $product->harga ?? 0), 0, ',', '.')"
            :category="$product->kategori->nama ?? $product->kategori->nama_kategori ?? 'Umum'"
            :is-custom="(bool) ($product->is_custom ?? false)"
            :href="url('/katalog/' . $product->id_produk)"
        />
    @empty
        <div class="rounded-2xl border-2 border-dashed border-amerta-navy/40 bg-white p-10 text-center md:col-span-2 xl:col-span-3">
            <p class="font-display text-xl font-bold text-amerta-navy">Belum ada produk pada kategori ini.</p>
            <p class="mt-2 text-sm font-medium text-slate-500">Pilih kategori lain atau kembali lagi nanti.</p>
        </div>
    @endforelse
</div>
    </section>
</x-layouts.app>
