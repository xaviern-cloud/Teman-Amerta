<?php

namespace App\Http\Controllers;

class AuthController extends CartController{
    public function artery () {
        echo "=== Laporan Keuangan Perusahaan QUANTUM === <br>";
        echo "line 2";
    }

    public function vena () {
        echo "Laporan Administratif Perusahaan QUANTUM === <br>";
    }

    public function nama_pengguna($nama)
    {
        // Memanggil fungsi dari BatchController meskipun beda file
        $pesanAncaman = $this->nama_partner($nama);

        return "Halo, Tuan $nama <br>" . $pesanAncaman;
    }
}
