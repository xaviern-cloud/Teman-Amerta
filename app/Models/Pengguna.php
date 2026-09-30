<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';

    protected $fillable = [
        'nama',
        'email',
        'kata_sandi',
        'peran',
        'no_hp',
    ];

    protected $hidden = [
        'kata_sandi',
    ];

    // Mengarahkan password Laravel ke kolom kata_sandi
    public function getAuthPassword()
    {
        return $this->kata_sandi;
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_pengguna');
    }

    public function keranjang()
    {
        return $this->hasOne(Keranjang::class, 'id_pengguna');
    }
}
