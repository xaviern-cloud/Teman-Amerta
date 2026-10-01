<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiKustomPesanan extends Model
{
    protected $table = 'nilai_kustom_pesanan';
    protected $primaryKey = 'id_nilai_kustom_pesanan';
    public $timestamps = false;

    protected $fillable = [
        'nomor_unit',
        'nama_kolom_transaksi',
        'nilai_teks',
        'referensi_berkas',
        'id_kolom_kustom',
        'id_item_pesanan',
        'tipe_masukan_transaksi',
    ];

    public function itemPesanan()
    {
        return $this->belongsTo(ItemPesanan::class, 'id_item_pesanan');
    }

    public function kolomKustom()
    {
        return $this->belongsTo(KolomKustom::class, 'id_kolom_kustom');
    }
}
