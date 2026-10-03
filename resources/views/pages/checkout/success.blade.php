@php
    $orderName = data_get($order ?? null, 'maba_name', auth()->user()?->nama ?? 'Ksatria Airlangga');
    $orderCode = data_get($order ?? null, 'order_code', data_get($order ?? null, 'kode_pesanan', 'TA-PROTOTYPE'));
    $orderStatus = data_get($order ?? null, 'status', 'Menunggu verifikasi');
    $pickupLocation = data_get($order ?? null, 'pickup_location', 'Kampus C');
@endphp

<x-layouts.app title="Pesanan Berhasil — TemanAmerta">
    <div class="mx-auto w-full max-w-md space-y-4 rounded-2xl border-brutal-thick bg-white p-8 text-center shadow-brutal-lg">
        <div class="w-16 h-16 bg-emerald-500 text-white font-bold text-3xl rounded-full border-2 border-navy flex items-center justify-center mx-auto shadow-brutal-md">
            ✓
        </div>
        <h1 class="text-3xl font-bold">Pesanan Terkirim!</h1>
        <p class="text-sm font-medium text-gray-600">Terima kasih, <strong>{{ $orderName }}</strong>. Bukti pembayaranmu sedang diverifikasi admin.</p>
        
        <div class="p-4 bg-bgSecondary border-2 border-navy rounded-xl text-left space-y-2 text-sm font-bold">
            <div class="flex justify-between">
                <span class="text-gray-500">Kode Pesanan:</span>
                <span class="text-pink">#{{ $orderCode }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Status:</span>
                <span class="px-2 py-0.5 bg-yellow border border-navy rounded text-xs uppercase">{{ $orderStatus }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Lokasi Pickup:</span>
                <span>{{ $pickupLocation }}</span>
            </div>
        </div>

        <x-button :href="route('home')" class="w-full">Kembali ke Beranda</x-button>
    </div>
</x-layouts.app>
