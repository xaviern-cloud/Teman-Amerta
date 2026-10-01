<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Jika database produk masih kosong, otomatis jalankan seeder
        if (Produk::count() === 0) {
            Artisan::call('db:seed', [
                '--class' => 'TemanAmertaSeeder',
                '--force' => true
            ]);
        }

        $totalProduk = Produk::count();
        $kategoriList = Kategori::withCount('produk')->get();
        $selectedCategory = $request->query('kategori');

        $query = Produk::with('kategori');

        if ($selectedCategory && $selectedCategory !== 'all') {
            $query->where('id_kategori', $selectedCategory);
        }

        $produkList = $query->get();

        return view('katalog', compact('totalProduk', 'kategoriList', 'produkList', 'selectedCategory'));
    }
}
