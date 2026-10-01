<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemanAmertaSeeder extends Seeder
{
    public function run(): void
    {
        //1. KATEGORI
        $kategori = ['Pakaian','Atribut','Penugasan PKKMB Universitas','Penugasan PKKMB Fakultas',];

        $idKategori = [];
        foreach ($kategori as $nama) {
            $idKategori[$nama] = DB::table('kategori')->insertGetId([
                'nama' => $nama,
                'deskripsi' => 'Kategori produk TemanAmerta',
                'created_at' => now(),
                'updated_at' => now(),
            ], 'id_kategori');
        }

        //2. PRODUK
        $produk = [
            // PAKAIAN
            [
                'nama' => 'Kemeja Putih Cowok',
                'harga' => 64000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Kemeja Putih Cewek',
                'harga' => 64000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Celana Panjang Cowok',
                'harga' => 69000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Rok Panjang Cewek',
                'harga' => 69000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Pantofel Hitam Cowok',
                'harga' => 65000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Pantofel Hitam Cewek',
                'harga' => 60000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Jilbab Segi Empat',
                'harga' => 20000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Kaos Putih Lengan Panjang',
                'harga' => 49000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Celana Training Hitam',
                'harga' => 54000,
                'kategori' => 'Pakaian',
            ],
            [
                'nama' => 'Rok Lilit Batik',
                'harga' => 37000,
                'kategori' => 'Pakaian',
            ],

            // ATRIBUT
            [
                'nama' => 'Hasduk + Ring',
                'harga' => 14000,
                'kategori' => 'Atribut',
            ],
            [
                'nama' => 'Kaos Kaki Panjang',
                'harga' => 14000,
                'kategori' => 'Atribut',
            ],
            [
                'nama' => 'Ikat Pinggang',
                'harga' => 19000,
                'kategori' => 'Atribut',
            ],

            // PENUGASAN PKKMB UNIVERSITAS
            [
                'nama' => 'ID Card AMERTA',
                'harga' => 14000,
                'kategori' => 'Penugasan PKKMB Universitas',
            ],
            [
                'nama' => 'Logbook AMERTA',
                'harga' => 17000,
                'kategori' => 'Penugasan PKKMB Universitas',
            ],
            [
                'nama' => 'Kertas Janji Mahasiswa + Hymne Airlangga',
                'harga' => 5000,
                'kategori' => 'Penugasan PKKMB Universitas',
            ],

            // PENUGASAN PKKMB FAKULTAS
            [
                'nama' => 'ID Card Fakultas',
                'harga' => 16000,
                'kategori' => 'Penugasan PKKMB Fakultas',
            ],
        ];

        $idProduk = [];

        foreach ($produk as $item) {
            $idProduk[$item['nama']] = DB::table('produk')->insertGetId([
                'nama' => $item['nama'],
                'deskripsi' => 'Produk dummy TemanAmerta untuk kebutuhan development.',
                'gambar' => null,
                'status' => 'AKTIF',
                'harga_dasar' => $item['harga'],
                'ketersediaan_dasar' => 100,
                'id_kategori' => $idKategori[$item['kategori']],
                'created_at' => now(),
                'updated_at' => now(),
            ], 'id_produk');
        }


        //3. VARIAN PRODUK
        //Ukuran belum dimasukkan karena masih menunggu guidebook.
        $varian = [
            // Celana Panjang Cowok
            [
                'produk' => 'Celana Panjang Cowok',
                'nama' => 'Putih',
            ],
            [
                'produk' => 'Celana Panjang Cowok',
                'nama' => 'Hitam',
            ],

            // Rok Panjang Cewek
            [
                'produk' => 'Rok Panjang Cewek',
                'nama' => 'Putih',
            ],
            [
                'produk' => 'Rok Panjang Cewek',
                'nama' => 'Hitam',
            ],

            // Jilbab
            [
                'produk' => 'Jilbab Segi Empat',
                'nama' => 'Putih',
            ],
            [
                'produk' => 'Jilbab Segi Empat',
                'nama' => 'Hitam',
            ],

            // Kaos Kaki
            [
                'produk' => 'Kaos Kaki Panjang',
                'nama' => 'Putih',
            ],
            [
                'produk' => 'Kaos Kaki Panjang',
                'nama' => 'Hitam',
            ],

            // Rok Lilit Batik
            [
                'produk' => 'Rok Lilit Batik',
                'nama' => 'Motif 1',
            ],
            [
                'produk' => 'Rok Lilit Batik',
                'nama' => 'Motif 2',
            ],
            [
                'produk' => 'Rok Lilit Batik',
                'nama' => 'Motif 3',
            ],
            [
                'produk' => 'Rok Lilit Batik',
                'nama' => 'Motif 4',
            ],
            [
                'produk' => 'Rok Lilit Batik',
                'nama' => 'Motif 5',
            ],
            [
                'produk' => 'Rok Lilit Batik',
                'nama' => 'Motif 6',
            ],
        ];

        foreach ($varian as $item) {
            DB::table('varian_produk')->insert([
                'nama' => $item['nama'],
                'harga' => $produk[array_search($item['produk'], array_column($produk, 'nama'))]['harga'],
                'ketersediaan' => 100,
                'id_produk' => $idProduk[$item['produk']],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        //4. BATCH DUMMY
        $idBatch = DB::table('batch')->insertGetId([
            'nama' => 'PKKMB AMERTA 2026 - Batch Dummy',
            'tanggal_mulai' => '2026-09-01',
            'tanggal_selesai' => '2026-10-31',
            'status' => 'ACTIVE',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //5. BATCH PRODUK
        foreach ($idProduk as $id) {
            DB::table('batch_produk')->insert([
                'id_batch' => $idBatch,
                'id_produk' => $id,
                'kuota' => 100,
                'ketersediaan' => true,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | CUSTOM TEMPLATE
        |--------------------------------------------------------------------------
        |
        | Belum dibuat karena masih menunggu guidebook PKKMB.
        |
        */
    }
}
