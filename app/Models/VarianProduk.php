<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VarianProduk extends Model
{
    protected $table = 'varian_produk';
    protected $primaryKey = 'id_varian';

    protected $fillable = [
        'nama',
        'harga',
        'ketersediaan',
        'id_produk',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function itemKeranjang()
    {
        return $this->hasMany(ItemKeranjang::class, 'id_varian');
    }

    public function itemPesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'id_varian');
    }
}
