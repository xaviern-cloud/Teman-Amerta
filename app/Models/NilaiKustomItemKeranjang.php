<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiKustomItemKeranjang extends Model
{
    protected $table = 'nilai_kustom_item_keranjang';
    protected $primaryKey = 'id_nilai_kustom_item_keranjang';
    public $timestamps = false;

    protected $fillable = [
        'nomor_unit',
        'nilai_teks',
        'referensi_berkas',
        'id_kolom_kustom',
        'id_item_keranjang',
    ];

    public function itemKeranjang()
    {
        return $this->belongsTo(ItemKeranjang::class, 'id_item_keranjang');
    }

    public function kolomKustom()
    {
        return $this->belongsTo(KolomKustom::class, 'id_kolom_kustom');
    }
}
