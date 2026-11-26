@props([
    'label' => null,
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
    'helpText' => null,
])

<div class="flex flex-col gap-1.5 w-full">
    @if($label)
        <label for="{{ $name }}" class="text-xs font-extrabold uppercase tracking-wider text-[#153373]">
            {{ $label }} @if($required) <span class="text-[#A43369]">*</span> @endif
        </label>
    @endif

    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        {{ $attributes->merge([
            'class' => 'w-full bg-white border-2 border-[#153373] rounded-xl px-4 py-3 text-sm font-semibold text-[#153373] placeholder-[#757781] shadow-[2.5px_2.5px_0px_#153373] focus:outline-none focus:ring-2 focus:ring-[#A43369] transition-all'
        ]) }}
    >

    @if($helpText)
        <span class="text-xs text-[#757781] font-medium">{{ $helpText }}</span>
    @endif
</div>