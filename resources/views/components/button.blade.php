@props([
    'variant' => 'primary', // primary, secondary, pink, ghost
    'size' => 'md', // sm, md, lg
    'href' => null,
    'type' => 'button'
])

@php
$baseClasses = 'inline-flex items-center justify-center font-bold rounded-lg border-2 border-amerta-navy shadow-neo transition-all hover:translate-x-0.5 hover:translate-y-0.5 disabled:opacity-40 disabled:cursor-not-allowed';

$sizes = [
    'sm' => 'px-3 py-1.5 text-xs',
    'md' => 'px-4 py-2 text-sm',
    'lg' => 'px-6 py-3 text-base',
];

$variants = [
    'primary' => 'bg-amerta-primary text-white hover:bg-amerta-primary-hover',
    'pink' => 'bg-amerta-pink text-white hover:bg-amerta-pink/90',
    'secondary' => 'bg-amerta-surface text-amerta-navy hover:bg-amerta-border',
    'ghost' => 'bg-transparent text-amerta-navy border-transparent shadow-none hover:bg-amerta-surface',
];

$classes = $baseClasses . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
