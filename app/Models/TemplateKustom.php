<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\KolomKustom;

class TemplateKustom extends Model
{
    protected $table = 'template_kustom';
    protected $primaryKey = 'id_template_kustom';
    public $timestamps = false;

    protected $fillable = [
        'id_produk',
        'nama_template',
        'jenis_template',
        'fakultas',
        'tahun',
        'guidebook',
        'status',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function kolomKustom()
    {
        return $this->hasMany(KolomKustom::class, 'id_template_kustom');
    }

    public function itemKeranjang()
    {
        return $this->hasMany(ItemKeranjang::class, 'id_template_kustom');
    }

    public function itemPesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'id_template_kustom');
    }
}
