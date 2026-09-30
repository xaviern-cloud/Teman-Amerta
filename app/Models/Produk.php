<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'status',
        'harga_dasar',
        'ketersediaan_dasar',
        'id_kategori',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function varian()
    {
        return $this->hasMany(VarianProduk::class, 'id_produk');
    }

    public function batchProduk()
    {
        return $this->hasMany(BatchProduk::class, 'id_produk');
    }

    public function templateKustom()
    {
        return $this->hasMany(TemplateKustom::class, 'id_produk');
    }
}
