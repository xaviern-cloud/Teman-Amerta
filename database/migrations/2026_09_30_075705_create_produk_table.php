<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->string('nama', 150);
            $table->text('deskripsi');
            $table->string('gambar', 255)->nullable();
            $table->timestamps();

            $table->string('status', 45);
            $table->decimal('harga_dasar', 12, 2)->nullable();
            $table->integer('ketersediaan_dasar')->nullable();

            $table->unsignedInteger('id_kategori');

            $table->foreign('id_kategori')
                ->references('id_kategori')
                ->on('kategori')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
