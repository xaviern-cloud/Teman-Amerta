<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TemanAmerta - Pre-Order Event Unair' }}</title>

    <!-- Fonts & Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amerta-bg text-amerta-navy font-sans antialiased flex flex-col min-h-screen">

    <!-- Partial Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6">
        {{ $slot }}
    </main>

    <!-- Partial Footer -->
    @include('partials.footer')

</body>
</html>
