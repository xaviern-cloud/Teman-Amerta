<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    
    // Sesuaikan primary key jika tidak menggunakan 'id' bawaan Laravel
    protected $primaryKey = 'id_kategori'; 

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori', 'id_kategori');
    }
}