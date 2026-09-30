<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('batch_produk', function (Blueprint $table) {
            $table->increments('id_batch_produk');

            $table->unsignedInteger('id_batch');
            $table->unsignedInteger('id_produk');

            $table->integer('kuota');
            $table->boolean('ketersediaan')->default(true);

            $table->foreign('id_batch')
                ->references('id_batch')
                ->on('batch')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_produk')
                ->references('id_produk')
                ->on('produk')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Satu produk tidak boleh terdaftar dua kali
            // dalam batch yang sama
            $table->unique(['id_batch', 'id_produk']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('batch_produk');
    }
};
