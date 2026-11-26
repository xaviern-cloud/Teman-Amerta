<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TemanAmerta — Cetak ID Card & PO Perlengkapan OSPEK' }}</title>

    {{-- Fonts & Vite --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FBF9F5] font-['Plus_Jakarta_Sans'] text-[#153373] antialiased min-h-screen flex flex-col justify-between">

    <x-navbar />

    <main class="grow">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>