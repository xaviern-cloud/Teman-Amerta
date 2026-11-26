@props([
    'variant' => 'primary', // primary, secondary, outline, yellow
    'type' => 'button',
    'href' => null,
])

@php
    $baseClasses = "inline-flex items-center justify-center gap-2 font-bold transition-all duration-150 rounded-xl border-2 border-[#153373] active:translate-x-0.5 active:translate-y-0.5 active:shadow-none";
    
    $variants = [
        'primary'   => 'bg-[#A43369] text-white shadow-[4px_4px_0px_#153373] hover:bg-[#8e2b5a]',
        'secondary' => 'bg-[#153373] text-white shadow-[4px_4px_0px_#D45990] hover:bg-[#102759]',
        'yellow'    => 'bg-[#FFE259] text-[#153373] shadow-[4px_4px_0px_#153373] hover:bg-[#f3d33f]',
        'outline'   => 'bg-white text-[#153373] shadow-[4px_4px_0px_#153373] hover:bg-gray-50',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes . ' px-5 py-3 text-sm sm:text-base']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes . ' px-5 py-3 text-sm sm:text-base']) }}>
        {{ $slot }}
    </button>
@endif