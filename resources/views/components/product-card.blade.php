@props([
    'category' => '',
    'title' => '',
    'description' => '',
    'price' => '',
    'badge' => null,
    'image' => null,
    'url' => '#'
])

<div class="flex flex-col justify-between bg-white rounded-2xl border-2 border-[#153373] shadow-[4px_4px_0px_#153373] overflow-hidden hover:-translate-y-1 transition-transform duration-200">
    <div>
        {{-- Preview Gambar / Slot --}}
        <div class="relative h-48 bg-[#EFEEEA] border-b-2 border-[#153373] flex items-center justify-center overflow-hidden">
            @if($badge)
                <span class="absolute top-3 right-3 bg-[#D45990] text-white text-xs font-semibold px-2.5 py-1 rounded-md border-2 border-[#153373] shadow-[2px_2px_0px_#153373]">
                    {{ $badge }}
                </span>
            @endif

            @if($image)
                <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
            @else
                <div class="w-12 h-12 rounded-lg bg-[#153373]/10 flex items-center justify-center text-[#153373]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
            @endif
        </div>

        {{-- Detail Konten --}}
        <div class="p-5 flex flex-col gap-2">
            <span class="text-xs font-bold uppercase tracking-wider text-[#757781]">{{ $category }}</span>
            <h3 class="font-syne text-xl font-bold text-[#153373] leading-snug line-clamp-2">{{ $title }}</h3>
            <p class="text-sm font-medium text-[#444650] leading-relaxed line-clamp-2">{{ $description }}</p>
        </div>
    </div>

    {{-- Footer Card --}}
    <div class="p-5 pt-0 flex items-center justify-between mt-4">
        <div>
            <span class="text-xs font-medium text-[#757781] block">Harga</span>
            <span class="font-syne text-xl font-bold text-[#153373]">{{ $price }}</span>
        </div>
        <a href="{{ $url }}" class="inline-flex items-center justify-center bg-[#153373] text-white text-sm font-bold px-4 py-2.5 rounded-xl border-2 border-[#153373] shadow-[2px_2px_0px_#D45990] hover:bg-[#102759] transition-colors">
            Pilih / Detail
        </a>
    </div>
</div>