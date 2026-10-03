<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';

    /**
     * Kolom yang diizinkan untuk mass-assignment
     */
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'password',
        'peran',
    ];

    /**
     * Kolom yang disembunyikan saat dikonversi ke Array/JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts tipe data
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
