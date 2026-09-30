<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $timestamps = false;

    protected $fillable = [
        'bukti_pembayaran',
        'status',
        'diunggah_pada',
        'diverifikasi_pada',
        'catatan_verifikasi',
        'jenis_pembayaran',
        'nominal_pembayaran',
        'id_pesanan',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan');
    }
}
