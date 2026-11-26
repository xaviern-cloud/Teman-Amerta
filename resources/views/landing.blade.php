<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teman Amerta 2026 - Kebutuhan Ospek Ksatria Airlangga</title>
    
    <!-- Google Fonts & Tailwind CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#153373', navyDark: '#001D54', pink: '#A43369',
                        pinkLight: '#FD7AB2', pinkAccent: '#D45990', yellow: '#FFE259',
                        bgMain: '#FBF9F5', bgSecondary: '#F5F3EF'
                    },
                    fontFamily: { syne: ['Syne', 'sans-serif'], sans: ['Plus Jakarta Sans', 'sans-serif'] },
                    boxShadow: { 'brutal-sm': '2.5px 2.5px 0px #153373', 'brutal-md': '4px 4px 0px #153373', 'brutal-lg': '6px 6px 0px #153373' }
                }
            }
        }
    </script>
    <style>
        .border-brutal { border: 2px solid #153373; }
        .border-brutal-thick { border: 3px solid #153373; }
    </style>
</head>
<body class="bg-bgMain text-navy font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- 1. PANGGIL HEADER COMPONENT -->
    @if(view()->exists('components.header'))
        @include('components.header')
    @else
        <!-- Header Default Sementara jika file components/header.blade.php belum ada -->
        <header class="w-full bg-white border-b-2 border-navy py-4 px-6 md:px-10 flex justify-between items-center shadow-brutal-sm">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 bg-yellow border-brutal rounded-xl flex items-center justify-center font-extrabold text-navy text-lg">
                    TA
                </div>
                <span class="font-syne font-bold text-xl text-navy">TemanAmerta</span>
            </div>
            <a href="#katalog" class="px-4 py-2 bg-navy text-white text-xs font-bold rounded-xl border-brutal hover:bg-pink transition">
                Katalog
            </a>
        </header>
    @endif

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="w-full pt-10 pb-16 px-6 md:px-10 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border-brutal rounded-full shadow-brutal-sm">
                        <span class="w-2.5 h-2.5 bg-emerald-500 rounded-full animate-pulse"></span>
                        <span class="text-xs font-extrabold uppercase tracking-wider">BATCH 1 TELAH DIBUKA • KUOTA TERSEDIA</span>
                    </div>

                    <h1 class="text-4xl md:text-6xl font-syne font-bold leading-tight">
                        Semua Kebutuhan <br class="hidden md:block"/>
                        AMERTA? 
                        <span class="inline-block px-3 py-1 bg-pink text-white rounded-xl border-brutal shadow-brutal-md transform -rotate-1 mt-1">
                            Ada di Sini.
                        </span>
                    </h1>

                    <p class="text-gray-700 text-base md:text-lg font-medium max-w-xl">
                        Platform Jasa Cetak ID Card dan Pre-Order Kebutuhan Ospek untuk Ksatria Airlangga.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="#katalog" class="px-6 py-3.5 bg-pink text-white font-bold rounded-xl border-brutal shadow-brutal-md hover:translate-x-0.5 hover:translate-y-0.5 transition flex items-center gap-2">
                            <span>Lihat Katalog Produk</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5" id="batch-info">
                    <div class="bg-white p-6 rounded-2xl border-brutal-thick shadow-brutal-lg space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 bg-yellow border-brutal rounded-md text-xs font-extrabold text-navy">
                                BATCH 1 AMERTA 2026
                            </span>
                            <span class="text-pink text-xs font-extrabold">PO Dibuka</span>
                        </div>
                        <h3 class="text-2xl font-syne font-bold text-navyDark">Gelombang Pertama Penugasan</h3>
                        <div class="space-y-1.5">
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-navy">Kuota Batch 1</span>
                                <span class="text-pink">78 / 100 Terpesan</span>
                            </div>
                            <div class="w-full h-4 bg-gray-200 rounded-full border-brutal overflow-hidden p-0.5">
                                <div class="h-full bg-pinkLight border border-navy rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Katalog Section -->
        <section id="katalog" class="w-full py-10 px-6 md:px-10 max-w-7xl mx-auto space-y-6">
            <div>
                <span class="text-xs font-extrabold text-pink uppercase tracking-widest">KATALOG PERLENGKAPAN</span>
                <h2 class="text-3xl md:text-4xl font-syne font-bold text-navy">Pilih Kebutuhan Ospekmu</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl border-brutal-thick shadow-brutal-md p-5 flex flex-col justify-between space-y-4">
                    <div>
                        <span class="text-xs font-extrabold text-gray-500 uppercase">PAKET BUNDLING</span>
                        <h3 class="text-xl font-syne font-bold text-navy">Paket Bundling Penugasan</h3>
                        <p class="text-sm text-gray-600 mt-1">Lengkap map, buku tugas, dan atribut wajib standar rektorat UNAIR.</p>
                    </div>
                    <div class="flex justify-between items-center pt-2">
                        <span class="text-xl font-syne font-bold text-navy">Rp 29.000</span>
                        <button onclick="toggleModal(true)" class="px-4 py-2 bg-navy text-white font-bold text-sm rounded-xl border-brutal shadow-brutal-sm hover:bg-pink transition">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal Form Checkout -->
    <div id="checkoutModal" class="fixed inset-0 bg-navy/60 backdrop-blur-sm hidden items-center justify-center p-4 z-50">
        <div class="bg-white rounded-2xl border-brutal-thick shadow-brutal-lg w-full max-w-xl p-6 space-y-4">
            <div class="flex justify-between items-center border-b-2 border-navy pb-3">
                <h3 class="font-syne font-bold text-2xl text-navy">Form Pemesanan Kit Amerta</h3>
                <button type="button" onclick="toggleModal(false)" class="text-navy font-extrabold text-xl hover:text-pink">✕</button>
            </div>
            <form action="{{ route('checkout.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <input type="text" name="maba_name" required placeholder="Nama Lengkap" class="w-full px-3 py-2 bg-bgSecondary border-brutal rounded-xl text-sm font-bold text-navy">
                <input type="text" name="whatsapp" required placeholder="No. WhatsApp" class="w-full px-3 py-2 bg-bgSecondary border-brutal rounded-xl text-sm font-bold text-navy">
                <select name="faculty" required class="w-full px-3 py-2 bg-bgSecondary border-brutal rounded-xl text-sm font-bold text-navy">
                    <option value="FST">Fakultas Sains dan Teknologi (FST)</option>
                    <option value="FEB">Fakultas Ekonomi dan Bisnis (FEB)</option>
                    <option value="Vokasi">Fakultas Vokasi</option>
                </select>
                <input type="hidden" name="package_type" value="Paket Bundling Penugasan">
                <input type="hidden" name="payment_type" value="full">
                <input type="hidden" name="pickup_location" value="Kampus C">
                <input type="hidden" name="amount" value="29000">
                
                <div>
                    <label class="block text-xs font-extrabold text-navy uppercase mb-1">Upload Bukti Transfer QRIS</label>
                    <input type="file" name="payment_proof" accept="image/*" required class="w-full text-xs font-bold text-navy">
                </div>

                <button type="submit" class="w-full py-3 bg-pink text-white font-bold rounded-xl border-brutal shadow-brutal-md hover:bg-navy transition">
                    Kirim & Konfirmasi Pesanan
                </button>
            </form>
        </div>
    </div>

    <!-- 2. FOOTER SECTION -->
    @if(view()->exists('components.footer'))
        @include('components.footer')
    @else
        <footer class="w-full bg-[#153373] text-white border-t-4 border-[#153373] pt-12 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                    <div class="md:col-span-5 space-y-4">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-[#FFE259] border-2 border-white rounded-xl flex items-center justify-center font-extrabold text-[#153373] text-xl shadow-[2px_2px_0px_#fff]">
                                TA
                            </div>
                            <span class="font-bold text-2xl text-white">TemanAmerta</span>
                        </div>
                        <p class="text-sm font-medium text-slate-200 leading-relaxed max-w-sm">
                            Pusat layanan pembuatan ID Card, atribut penugasan, dan kebutuhan ospek terpercaya untuk mahasiswa baru Universitas Airlangga.
                        </p>
                    </div>

                    <div class="md:col-span-4 space-y-3">
                        <h4 class="text-xs font-extrabold uppercase tracking-widest text-[#FFE259]">
                            Lokasi Pengambilan Posko
                        </h4>
                        <ul class="space-y-2 text-sm font-medium text-slate-200">
                            <li class="flex items-start gap-2">
                                <span class="text-[#FD7AB2]">📍</span>
                                <span><strong>Kampus B:</strong> Area Danau / Pujasera FISIP UNAIR</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#FD7AB2]">📍</span>
                                <span><strong>Kampus C:</strong> Student Center / Depan Perpustakaan</span>
                            </li>
                        </ul>
                    </div>

                    <div class="md:col-span-3 space-y-3">
                        <h4 class="text-xs font-extrabold uppercase tracking-widest text-[#FFE259]">
                            Butuh Bantuan Cepat?
                        </h4>
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] text-white text-xs font-bold px-4 py-2.5 rounded-xl border-2 border-white shadow-[2px_2px_0px_#000] hover:translate-x-0.5 hover:translate-y-0.5 transition">
                            <span>Hubungi Admin WhatsApp</span>
                        </a>
                    </div>
                </div>

                <div class="pt-8 border-t border-white/20 text-center text-xs text-slate-300 font-medium">
                    &copy; {{ date('Y') }} TemanAmerta. Layanan Independen Pembantu Penugasan Maba UNAIR.
                </div>
            </div>
        </footer>
    @endif

    <!-- Skrip Modal Checkout -->
    <script>
        function toggleModal(show) {
            const modal = document.getElementById('checkoutModal');
            if (show) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            } else {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        }
    </script>
</body>
</html> 