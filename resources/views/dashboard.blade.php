<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    <p><a href="{{ url('/katalog') }}"> Katalog Produk</a></p>
    <p><a href="{{ url('/lacak_pesanan')}}">Lacak Pesanan</a></p>
    <p><a href="{{ url('/login')}}">Login Disini</a></p>
    <p><a href="{{ url('/panduan_buku_fakultas')}}">Panduan Buku Fakultas</a></p>

        <search>
        <form action="{{ url('/dashboard/search') }}" method="GET">
            <input type="text" name="query" placeholder="Cari produk...">
            <button type="submit">Cari</button>
        </form>
    <a href="{{ url('/katalog') }}">
        <button>Lihat Katalog Produk |</button>
    </a>

    <a href="{{ url('/lacak_pesanan')}}">
        <button>Lacak Status Pesanan -> </button>
    </a>

</body>
</html>
