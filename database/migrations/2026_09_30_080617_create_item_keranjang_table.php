<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_keranjang', function (Blueprint $table) {
            $table->increments('id_item_keranjang');

            $table->integer('jumlah');

            $table->unsignedInteger('id_keranjang');
            $table->unsignedInteger('id_varian')->nullable();
            $table->unsignedInteger('id_batch_produk');
            $table->unsignedInteger('id_template_kustom')->nullable();

            $table->foreign('id_keranjang')
                ->references('id_keranjang')
                ->on('keranjang')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_varian')
                ->references('id_varian')
                ->on('varian_produk')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('id_batch_produk')
                ->references('id_batch_produk')
                ->on('batch_produk')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('id_template_kustom')
                ->references('id_template_kustom')
                ->on('template_kustom')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_keranjang');
    }
};
