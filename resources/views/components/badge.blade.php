@props([
    'variant' => 'primary',
])

@php
    $variants = [
        'primary' => 'bg-brand-pink text-white',
        'navy'    => 'bg-brand-navy text-white',
        'yellow'  => 'bg-yellow-300 text-brand-navy',
        'green'   => 'bg-emerald-400 text-brand-navy',
    ];

    $classes = "inline-block font-bold text-xs px-3 py-1 border border-brand-navy shadow-neo-sm rounded-full " . ($variants[$variant] ?? $variants['primary']);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
