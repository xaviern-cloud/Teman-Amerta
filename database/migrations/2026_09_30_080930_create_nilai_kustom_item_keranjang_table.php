<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilai_kustom_item_keranjang', function (Blueprint $table) {
            $table->increments('id_nilai_kustom_keranjang');

            $table->smallInteger('nomor_unit');

            $table->text('nilai_teks')->nullable();
            $table->string('referensi_berkas', 255)->nullable();

            $table->unsignedInteger('id_kolom_kustom');
            $table->unsignedInteger('id_item_keranjang');

            $table->foreign('id_kolom_kustom')
                ->references('id_kolom_kustom')
                ->on('kolom_kustom')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_item_keranjang')
                ->references('id_item_keranjang')
                ->on('item_keranjang')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Satu field custom hanya boleh punya satu jawaban
            // untuk setiap unit dalam satu item keranjang.
            $table->unique([
                'id_item_keranjang',
                'id_kolom_kustom',
                'nomor_unit'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai_kustom_item_keranjang');
    }
};
