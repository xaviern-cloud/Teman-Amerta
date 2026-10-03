<x-layouts.app title="Keranjang — TemanAmerta">
    <section class="mx-auto max-w-3xl space-y-8">
        <header class="space-y-3">
            <x-badge variant="yellow">Keranjang</x-badge>
            <h1 class="font-display text-3xl font-bold text-brand-navy-dark sm:text-4xl">Keranjang belanja</h1>
        </header>

        <div class="rounded-2xl border-brutal-thick bg-white p-8 text-center shadow-brutal-lg sm:p-12">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border-2 border-brand-navy bg-brand-yellow shadow-neo">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
            <h2 class="mt-6 font-display text-2xl font-bold text-brand-navy-dark">Keranjangmu masih kosong</h2>
            <p class="mx-auto mt-2 max-w-md text-sm font-medium leading-relaxed text-slate-600">Tambahkan kebutuhan AMERTA dan PKKMB dari katalog. Integrasi penyimpanan keranjang akan ditangani backend nanti.</p>
            <x-button :href="route('catalog.index')" class="mt-6">Lihat Katalog</x-button>
        </div>
    </section>
</x-layouts.app>
