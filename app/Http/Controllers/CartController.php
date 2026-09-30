<?php

namespace App\Http\Controllers;

// Pastikan extends Controller bawaan Laravel jika ini adalah controller
class CartController extends Controller
{
    protected function nama_partner($nama)
    {
        return "Jangan Penasaran sama $nama";
    }
}
