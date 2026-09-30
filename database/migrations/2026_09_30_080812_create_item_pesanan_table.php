<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_pesanan', function (Blueprint $table) {
            $table->increments('id_item_pesanan');

            // Snapshot data produk saat checkout
            $table->string('nama_produk_transaksi', 150);
            $table->string('nama_varian_transaksi', 100)->nullable();

            $table->integer('jumlah');
            $table->decimal('harga_satuan', 12, 2);
            $table->decimal('subtotal', 12, 2);

            $table->unsignedInteger('id_varian')->nullable();
            $table->unsignedInteger('id_pesanan');
            $table->unsignedInteger('id_batch_produk');
            $table->unsignedInteger('id_template_kustom')->nullable();

            $table->foreign('id_varian')
                ->references('id_varian')
                ->on('varian_produk')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('id_pesanan')
                ->references('id_pesanan')
                ->on('pesanan')
                ->onDelete('cascade')
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
        Schema::dropIfExists('item_pesanan');
    }
};
