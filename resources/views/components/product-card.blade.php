@props([
    'title' => 'Nama Produk',
    'price' => 'Rp0',
    'category' => 'Kategori',
    'image' => null,
    'hasVariant' => false,
    'isCustom' => false,
    'badge' => null,
    'href' => '#'
])

<div class="group bg-amerta-surface border-3 border-amerta-navy rounded-xl overflow-hidden shadow-neo hover:-translate-y-1 hover:shadow-neo-lg transition-all duration-200 flex flex-col justify-between">
    <div>
        <!-- Gambar Produk & Badge -->
        <div class="relative h-48 w-full bg-white border-b-3 border-amerta-navy overflow-hidden flex items-center justify-center p-4">
            @if($image)
                <img src="{{ $image }}" alt="{{ $title }}" class="h-full w-full object-contain group-hover:scale-105 transition-transform duration-200">
            @else
                <div class="text-amerta-muted text-xs font-bold flex flex-col items-center gap-1">
                    <svg class="w-10 h-10 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Foto Produk</span>
                </div>
            @endif

            <!-- Custom Badge / Tags -->
            <div class="absolute top-2 left-2 flex flex-col gap-1 items-start">
                @if($isCustom)
                    <span class="bg-amerta-pink text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy shadow-neo-sm uppercase tracking-wider">
                        Kustom Data
                    </span>
                @endif
                @if($badge)
                    <span class="bg-amerta-primary text-white text-[10px] font-black px-2 py-0.5 rounded border border-amerta-navy shadow-neo-sm uppercase tracking-wider">
                        {{ $badge }}
                    </span>
                @endif
            </div>
        </div>

        <!-- Info Produk -->
        <div class="p-4">
            <span class="text-xs font-bold text-amerta-muted uppercase tracking-wider block mb-1">
                {{ $category }}
            </span>
            <h3 class="font-extrabold text-amerta-navy text-base leading-snug line-clamp-2 mb-2 group-hover:text-amerta-pink transition-colors">
                <a href="{{ $href }}">{{ $title }}</a>
            </h3>
        </div>
    </div>

    <!-- Pricing & Action Button -->
    <div class="p-4 pt-0">
        <div class="flex items-center justify-between mt-2 pt-3 border-t-2 border-amerta-border">
            <div>
                <span class="text-[10px] font-bold text-amerta-muted block">Mulai dari</span>
                <span class="text-base font-black text-amerta-navy">{{ $price }}</span>
            </div>
            <x-button href="{{ $href }}" variant="primary" size="sm">
                Detail
            </x-button>
        </div>
    </div>
</div>
