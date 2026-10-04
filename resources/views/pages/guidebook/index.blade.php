<x-layouts.app title="Panduan Fakultas — TemanAmerta">
    <section class="space-y-8">
        <header class="max-w-3xl space-y-3">
            <x-badge variant="yellow">Pusat panduan</x-badge>
            <h1 class="font-display text-3xl font-bold text-brand-navy-dark sm:text-4xl">Panduan kebutuhan fakultas</h1>
            <p class="font-medium leading-relaxed text-slate-600">Konten berikut masih berupa state frontend dan dapat diganti ketika guidebook resmi tersedia.</p>
        </header>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['title' => 'Fakultas Sains dan Teknologi', 'code' => 'FST', 'status' => 'Menunggu guidebook'],
                ['title' => 'Fakultas Ekonomi dan Bisnis', 'code' => 'FEB', 'status' => 'Menunggu guidebook'],
                ['title' => 'Fakultas Vokasi', 'code' => 'VOKASI', 'status' => 'Menunggu guidebook'],
            ] as $faculty)
                <article class="space-y-5 rounded-2xl border-brutal-thick bg-white p-5 shadow-brutal-md">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl border-2 border-brand-navy bg-brand-yellow font-display font-bold shadow-neo-sm">
                            {{ $faculty['code'] }}
                        </div>
                        <x-badge variant="primary">Segera hadir</x-badge>
                    </div>
                    <div class="space-y-1">
                        <h2 class="font-display text-lg font-bold text-brand-navy-dark">{{ $faculty['title'] }}</h2>
                        <p class="text-sm font-medium text-slate-500">{{ $faculty['status'] }}</p>
                    </div>
                    <x-button type="button" variant="outline" size="sm" disabled>Lihat Panduan</x-button>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.app>
