@props([
    'label' => null,
    'name' => '',
    'type' => 'text',
    'error' => null,
    'value' => null,
])

@php
    // Cek error dari prop atau otomatis dari Session Errors Laravel
    $hasError = $error || ($name && isset($errors) && $errors->has($name));
    $errorMessage = $error ?? ($name && isset($errors) && $errors->has($name) ? $errors->first($name) : null);
    
    // Support otomatis old() value saat validasi gagal
    $inputValue = old($name, $value ?? $attributes->get('value', ''));
    
    $borderClass = $hasError ? 'border-red-500 focus:ring-red-400' : 'border-brand-navy focus:ring-brand-pink';
@endphp

<div class="w-full">
    @if($label)
        <label for="{{ $name }}" class="block font-bold text-brand-navy mb-1.5 text-sm">
            {{ $label }}
        </label>
    @endif
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}"
        value="{{ $inputValue }}"
        {{ $attributes->merge(['class' => "w-full px-4 py-2.5 bg-white border-2 rounded-xl shadow-neo-sm focus:outline-none focus:ring-2 transition-all font-medium text-brand-navy placeholder:text-gray-400 disabled:bg-gray-100 disabled:cursor-not-allowed $borderClass"]) }}
    >
    @if($errorMessage)
        <p class="text-red-500 font-bold text-xs mt-1">{{ $errorMessage }}</p>
    @endif
</div>
