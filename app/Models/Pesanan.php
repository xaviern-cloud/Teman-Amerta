<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    public $timestamps = false;

    protected $fillable = [
        'kode_pesanan',
        'tanggal_pesanan',
        'total_pembayaran',
        'status',
        'id_pengguna',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_pesanan');
    }

    public function itemPesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'id_pesanan');
    }
}
