<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TemanAmerta - Pre-Order Perlengkapan AMERTA & PKKMB' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amerta-bg text-amerta-navy font-sans min-h-screen flex flex-col antialiased">

    <!-- NAVBAR COMPONENT -->
    <x-navbar />

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <!-- FOOTER COMPONENT -->
    <x-footer />

</body>
</html>
