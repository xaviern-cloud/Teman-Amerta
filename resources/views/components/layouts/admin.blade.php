<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard - TemanAmerta' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amerta-bg font-sans text-amerta-navy min-h-screen flex flex-col md:flex-row antialiased">

    <!-- SIDEBAR NAV (Desktop & Tablet) -->
    <aside class="w-full md:w-64 bg-white border-r-3 border-amerta-navy flex-shrink-0 flex flex-col justify-between p-4 shadow-neo z-20">
        <div>
            <!-- Admin Brand Logo -->
            <div class="flex items-center justify-between border-b-3 border-amerta-navy pb-4 mb-6">
                <a href="/admin/dashboard" class="flex items-center gap-2">
                    <span class="bg-amerta-pink text-white font-black px-2 py-1 rounded border border-amerta-navy text-xs">ADMIN</span>
                    <span class="font-black text-xl text-amerta-navy tracking-tight">TemanAmerta</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-1.5 font-extrabold text-xs">
                <a href="/admin/dashboard" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-amerta-surface border-2 border-amerta-navy text-amerta-navy shadow-neo-sm">
                    <span>📊</span> Dashboard
                </a>

                <div class="pt-3 pb-1 px-3 text-[10px] font-black uppercase text-amerta-muted tracking-wider">
                    Katalog & Produk
                </div>
                <a href="/admin/kategori" class="flex items-center gap-3 px-3 py-2 rounded-lg text-amerta-navy hover:bg-amerta-surface hover:border-2 hover:border-amerta-navy transition-all">
                    <span>📁</span> Kategori
                </a>
                <a href="/admin/produk" class="flex items-center gap-3 px-3 py-2 rounded-lg text-amerta-navy hover:bg-amerta-surface hover:border-2 hover:border-amerta-navy transition-all">
                    <span>👕</span> Produk & Varian
                </a>
                <a href="/admin/template-kustom" class="flex items-center gap-3 px-3 py-2 rounded-lg text-amerta-navy hover:bg-amerta-surface hover:border-2 hover:border-amerta-navy transition-all">
                    <span>📝</span> Template Kustom
                </a>

                <div class="pt-3 pb-1 px-3 text-[10px] font-black uppercase text-amerta-muted tracking-wider">
                    Pre-Order & Transaksi
                </div>
                <a href="/admin/batch" class="flex items-center gap-3 px-3 py-2 rounded-lg text-amerta-navy hover:bg-amerta-surface hover:border-2 hover:border-amerta-navy transition-all">
                    <span>🗓️</span> Batch Pre-Order
                </a>
                <a href="/admin/pesanan" class="flex items-center justify-between px-3 py-2 rounded-lg text-amerta-navy hover:bg-amerta-surface hover:border-2 hover:border-amerta-navy transition-all">
                    <span class="flex items-center gap-3"><span>📦</span> Pesanan</span>
                    <span class="bg-amerta-pink text-white text-[10px] px-1.5 py-0.5 rounded-full border border-amerta-navy font-bold">12</span>
                </a>
                <a href="/admin/pembayaran" class="flex items-center justify-between px-3 py-2 rounded-lg text-amerta-navy hover:bg-amerta-surface hover:border-2 hover:border-amerta-navy transition-all">
                    <span class="flex items-center gap-3"><span>💳</span> Verifikasi Bayar</span>
                    <span class="bg-amber-400 text-amerta-navy text-[10px] px-1.5 py-0.5 rounded-full border border-amerta-navy font-black">3</span>
                </a>
            </nav>
        </div>

        <!-- Admin Profile / Logout -->
        <div class="pt-4 border-t-2 border-amerta-border mt-6 flex items-center justify-between">
            <div class="text-xs">
                <p class="font-black text-amerta-navy">Admin TemanAmerta</p>
                <p class="text-[10px] font-bold text-amerta-muted">admin@temanamerta.com</p>
            </div>
            <a href="/logout" class="p-2 bg-amerta-surface border-2 border-amerta-navy rounded-lg hover:bg-red-100 transition-colors" title="Logout">
                🚪
            </a>
        </div>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <main class="flex-1 flex flex-col min-w-0 overflow-y-auto">
        <!-- Top Navigation Bar -->
        <header class="bg-white border-b-3 border-amerta-navy px-6 py-4 flex items-center justify-between shadow-neo-sm">
            <div class="font-black text-base text-amerta-navy">
                {{ $header ?? 'Dashboard Overview' }}
            </div>
            <div class="flex items-center gap-3">
                <span class="bg-emerald-100 text-emerald-800 border border-amerta-navy text-xs font-extrabold px-3 py-1 rounded-full flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Batch Active: Gelombang 1 AMERTA
                </span>
            </div>
        </header>

        <!-- Dynamic Content Slot -->
        <div class="p-6 md:p-8 flex-1">
            {{ $slot }}
        </div>
    </main>

</body>
</html>
