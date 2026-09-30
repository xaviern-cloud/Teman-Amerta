<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Registrasi - TemanAmerta</title>

    {{-- Memanggil File CSS dari folder public/css/app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h2>Form Registrasi (Testing)</h2>

    {{-- Pesan Error Validasi Backend --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <strong>Registrasi Gagal:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama Lengkap:</label><br>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>

        <br>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <br>

        <div>
            <label for="no_hp">Nomor HP / WhatsApp:</label><br>
            <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" placeholder="08xxxxxxxxxx" required>
        </div>

        <br>

        {{-- Field Password & Indikator Strength --}}
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" style="width: 250px;" required>

            <!-- Progress Bar Analisis Password -->
            <div class="strength-bar-container">
                <div id="strength-bar" class="strength-bar"></div>
            </div>

            <!-- Teks Status Kekuatan -->
            <div id="strength-text" class="strength-text"></div>

            <!-- Daftar Kriteria Check Real-time -->
            <ul class="criteria-list">
                <li id="c-length">Minimal 8 karakter</li>
                <li id="c-lower">Mengandung huruf kecil (a-z)</li>
                <li id="c-upper">Mengandung huruf besar (A-Z)</li>
                <li id="c-number">Mengandung angka (0-9)</li>
                <li id="c-symbol">Mengandung simbol (!@#$%^&*)</li>
            </ul>
        </div>

        <br>

        <div>
            <label for="password_confirmation">Konfirmasi Password:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation" style="width: 250px;" required>
            <div id="match-text" class="match-text"></div>
        </div>

        <br>

        <button type="submit">Daftar Akun</button>
    </form>

    <br>
    <p>Sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a></p>

    {{-- Memanggil File JS dari folder public/js/app.js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
