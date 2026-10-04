<x-layouts.app title="Lacak Pesanan — TemanAmerta">
    <section class="mx-auto max-w-2xl space-y-8">
        <header class="space-y-3 text-center">
            <x-badge variant="yellow">Status pesanan</x-badge>
            <h1 class="font-display text-3xl font-bold text-brand-navy-dark sm:text-4xl">Lacak pesananmu</h1>
            <p class="font-medium text-slate-600">Masukkan kode pesanan untuk melihat simulasi alur pelacakan frontend.</p>
        </header>

        <form data-prototype-form class="space-y-5 rounded-2xl border-brutal-thick bg-white p-6 shadow-brutal-lg sm:p-8">
            <x-input
                name="order_code"
                label="Kode Pesanan"
                placeholder="Contoh: TA-2026-001"
                autocomplete="off"
                required
            />

            <x-button type="submit" variant="primary" class="w-full">Cek Status Pesanan</x-button>

            <div data-form-status class="hidden rounded-xl border-2 border-brand-navy bg-brand-yellow/40 p-4 text-sm font-bold text-brand-navy" role="status"></div>
        </form>

        <div class="grid gap-3 sm:grid-cols-3" aria-label="Tahapan pesanan">
            @foreach (['Pembayaran diverifikasi', 'Pesanan diproduksi', 'Siap diambil'] as $step)
                <div class="rounded-xl border-2 border-brand-navy bg-white p-4 text-center text-xs font-bold shadow-neo-sm">{{ $step }}</div>
            @endforeach
        </div>
    </section>
</x-layouts.app>
