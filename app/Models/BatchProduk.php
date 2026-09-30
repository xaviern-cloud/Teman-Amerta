<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BatchProduk extends Model
{
    protected $table = 'batch_produk';
    protected $primaryKey = 'id_batch_produk';
    public $timestamps = false;

    protected $fillable = [
        'kuota',
        'ketersediaan',
        'id_batch',
        'id_produk',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'id_batch');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function itemKeranjang()
    {
        return $this->hasMany(ItemKeranjang::class, 'id_batch_produk');
    }

    public function itemPesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'id_batch_produk');
    }
}
