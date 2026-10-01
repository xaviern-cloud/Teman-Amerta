<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolomKustom extends Model
{
    protected $table = 'kolom_kustom';
    protected $primaryKey = 'id_kolom_kustom';
    public $timestamps = false;

    protected $fillable = [
        'nama_kolom',
        'tipe_masukan',
        'wajib',
        'aturan_validasi',
        'urutan_tampil',
        'id_template_kustom',
        'petunjuk_berkas',
        'opsi_pilihan',
    ];

    protected $casts = [
        'opsi_pilihan' => 'array',
    ];

    public function templateKustom()
    {
        return $this->belongsTo(TemplateKustom::class, 'id_template_kustom');
    }

    public function nilaiKustomItemKeranjang()
    {
        return $this->hasMany(NilaiKustomItemKeranjang::class, 'id_kolom_kustom');
    }

    public function nilaiKustomPesanan()
    {
        return $this->hasMany(NilaiKustomPesanan::class, 'id_kolom_kustom');
    }
}
