<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\models\BatchProduk;

class Batch extends Model
{
    protected $table = 'batch';
    protected $primaryKey = 'id_batch';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    public function batchProduk()
    {
        return $this->hasMany(BatchProduk::class, 'id_batch');
    }
}
