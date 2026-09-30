<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPesanan extends Model
{
    protected $table = 'item_pesanan';
    protected $primaryKey = 'id_item_pesanan';
    public $timestamps = false;

    protected $fillable = [
        'nama_produk_transaksi',
        'nama_varian_transaksi',
        'jumlah',
        'harga_satuan',
        'subtotal',
        'id_varian',
        'id_pesanan',
        'id_batch_produk',
        'id_template_kustom',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan');
    }

    public function varian()
    {
        return $this->belongsTo(VarianProduk::class, 'id_varian');
    }

    public function batchProduk()
    {
        return $this->belongsTo(BatchProduk::class, 'id_batch_produk');
    }

    public function templateKustom()
    {
        return $this->belongsTo(TemplateKustom::class, 'id_template_kustom');
    }

    public function nilaiKustomPesanan()
    {
        return $this->hasMany(NilaiKustomPesanan::class, 'id_item_pesanan');
    }
}
