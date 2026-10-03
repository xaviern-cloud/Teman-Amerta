<x-app-layout>
    <x-slot name="title">Pesanan Saya - TemanAmerta</x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Header -->
        <div class="mb-8 border-b-3 border-amerta-navy pb-4">
            <h1 class="text-3xl font-black text-amerta-navy flex items-center gap-3">
                📦 Riwayat Pesanan Saya
            </h1>
            <p class="text-sm font-medium text-amerta-muted mt-1">
                Pantau progres pengerjaan atribut dan status pembayaran kamu di sini.
            </p>
        </div>

        <!-- LIST PESANAN -->
        <div class="space-y-4">

            <!-- ORDER CARD 1 (Diproses) -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                <div class="flex flex-col md:flex-row md:items-center justify-between border-b-2 border-amerta-border pb-3 mb-4 gap-2">
                    <div>
                        <span class="text-xs font-bold text-amerta-muted block">Nomor Pesanan</span>
                        <span class="font-mono font-black text-amerta-navy text-base">#ORD-20260810-001</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="bg-blue-100 text-amerta-navy border border-amerta-navy text-xs font-black px-3 py-1 rounded-full">
                            ⚙️ Sedang Diproses Admin
                        </span>
                        <span class="text-xs font-bold text-amerta-muted">10 Ags 2026</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                    <div class="md:col-span-8 space-y-1">
                        <p class="font-extrabold text-amerta-navy text-sm">
                            ID Card Custom AMERTA + Tali Lanyard <span class="text-amerta-muted font-normal">(1x)</span>
                        </p>
                        <p class="font-extrabold text-amerta-navy text-sm">
                            Kaos PKKMB Resmi UNAIR 2026 <span class="text-amerta-muted font-normal">(1x)</span>
                        </p>
                    </div>

                    <div class="md:col-span-4 flex flex-col sm:flex-row md:flex-col lg:flex-row items-start sm:items-center justify-between gap-3 border-t md:border-t-0 border-amerta-border pt-3 md:pt-0">
                        <div>
                            <span class="text-[10px] font-bold text-amerta-muted block">Total Tagihan</span>
                            <span class="text-base font-black text-amerta-navy">Rp80.000</span>
                        </div>
                        <x-button href="/pesanan/1" variant="primary" size="sm">
                            Lacak Pesanan →
                        </x-button>
                    </div>
                </div>
            </div>

            <!-- ORDER CARD 2 (Menunggu Pembayaran) -->
            <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                <div class="flex flex-col md:flex-row md:items-center justify-between border-b-2 border-amerta-border pb-3 mb-4 gap-2">
                    <div>
                        <span class="text-xs font-bold text-amerta-muted block">Nomor Pesanan</span>
                        <span class="font-mono font-black text-amerta-navy text-base">#ORD-20260805-089</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="bg-amber-100 text-amber-900 border border-amerta-navy text-xs font-black px-3 py-1 rounded-full">
                            ⏳ Menunggu Verifikasi Pembayaran
                        </span>
                        <span class="text-xs font-bold text-amerta-muted">05 Ags 2026</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                    <div class="md:col-span-8 space-y-1">
                        <p class="font-extrabold text-amerta-navy text-sm">
                            Bundle Atribut Lengkap Fakultas Kedokteran <span class="text-amerta-muted font-normal">(1x)</span>
                        </p>
                    </div>

                    <div class="md:col-span-4 flex flex-col sm:flex-row md:flex-col lg:flex-row items-start sm:items-center justify-between gap-3 border-t md:border-t-0 border-amerta-border pt-3 md:pt-0">
                        <div>
                            <span class="text-[10px] font-bold text-amerta-muted block">Total Tagihan</span>
                            <span class="text-base font-black text-amerta-navy">Rp120.000</span>
                        </div>
                        <x-button href="/pesanan/2" variant="secondary" size="sm">
                            Detail Status
                        </x-button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
