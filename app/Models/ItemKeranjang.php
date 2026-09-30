<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemKeranjang extends Model
{
    protected $table = 'item_keranjang';
    protected $primaryKey = 'id_item_keranjang';
    public $timestamps = false;

    protected $fillable = [
        'jumlah',
        'id_keranjang',
        'id_varian',
        'id_batch_produk',
        'id_template_kustom',
    ];

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang');
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

    public function nilaiKustom()
    {
        return $this->hasMany(NilaiKustomItemKeranjang::class, 'id_item_keranjang');
    }
}
