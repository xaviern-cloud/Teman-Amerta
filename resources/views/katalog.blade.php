<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <p></p>Ini adalah halaman katalog</p>

    <div class="flex gap-2">
    <!-- Tombol Semua Produk -->
    <button class="filter-btn active" data-category="all">
        Semua Produk ({{ $totalProduk }})
    </button>

    <!-- Loop Kategori Dinamis dari Database -->
    @foreach ($kategoriList as $kategori)
        <button class="filter-btn" data-category="{{ $kategori->id_kategori }}">
            {{ $kategori->nama_kategori }} ({{ $kategori->produk_count }})
        </button>
    @endforeach
</div>

<!-- Tombol Filter Kategori Dinamis -->
<div class="flex gap-2 mb-6">
    <!-- Tombol Semua Produk -->
    <a href="{{ route('katalog') }}"
       class="px-4 py-2 rounded-full border-2 font-bold {{ empty($selectedCategory) || $selectedCategory == 'all' ? 'bg-[#153373] text-white' : 'bg-white text-[#153373] border-[#153373]' }}">
        Semua Produk ({{ $totalProduk }})
    </a>

    <!-- Loop Kategori dari Database -->
    @foreach ($kategoriList as $kategori)
        <a href="{{ route('katalog', ['kategori' => $kategori->id_kategori]) }}"
           class="px-4 py-2 rounded-full border-2 font-bold {{ $selectedCategory == $kategori->id_kategori ? 'bg-[#153373] text-white' : 'bg-white text-[#153373] border-[#153373]' }}">
            {{ $kategori->nama }} ({{ $kategori->produk_count }})
        </a>
    @endforeach
</div>

<!-- Grid Kartu Produk -->
<div class="grid grid-cols-3 gap-4">
    @forelse ($produkList as $produk)
        <div class="product-card border-2 border-[#153373] p-4 rounded-xl shadow-md">
            <span class="text-xs font-bold bg-yellow-300 px-2 py-1 rounded border border-black">
                {{ $produk->kategori->nama ?? 'Umum' }}
            </span>

            <h3 class="font-bold text-lg text-[#153373] mt-2">{{ $produk->nama }}</h3>

            <p class="text-xs text-gray-400 mt-2">Harga Satuan</p>
            <p class="font-extrabold text-xl text-[#153373]">
                Rp {{ number_format($produk->harga_dasar, 0, ',', '.') }}
            </p>
        </div>
    @empty
        <div class="col-span-3 text-center py-8">
            <p class="text-gray-500 font-bold">Belum ada produk pada kategori ini.</p>
        </div>
    @endforelse
</div>

</body>
</html>
