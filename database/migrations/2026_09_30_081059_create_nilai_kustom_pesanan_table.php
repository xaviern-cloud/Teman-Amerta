<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilai_kustom_pesanan', function (Blueprint $table) {
            $table->increments('id_nilai_kustom_pesanan');

            $table->smallInteger('nomor_unit');

            // Snapshot nama field saat transaksi
            $table->string('nama_kolom_transaksi', 150);

            $table->text('nilai_teks')->nullable();
            $table->string('referensi_berkas', 255)->nullable();

            $table->unsignedInteger('id_kolom_kustom');
            $table->unsignedInteger('id_item_pesanan');

            // Snapshot tipe input saat transaksi
            $table->string('tipe_masukan_transaksi', 20);

            $table->foreign('id_kolom_kustom')
                ->references('id_kolom_kustom')
                ->on('kolom_kustom')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('id_item_pesanan')
                ->references('id_item_pesanan')
                ->on('item_pesanan')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Satu field custom hanya boleh memiliki
            // satu jawaban untuk setiap unit dalam item pesanan.
            $table->unique([
                'id_item_pesanan',
                'id_kolom_kustom',
                'nomor_unit'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai_kustom_pesanan');
    }
};
