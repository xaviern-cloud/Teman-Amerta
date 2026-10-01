<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('varian_produk', function (Blueprint $table) {
            $table->increments('id_varian');
            $table->string('nama', 100);
            $table->decimal('harga', 12, 2);
            $table->integer('ketersediaan')->default(0);
            $table->timestamps();

            $table->unsignedInteger('id_produk');

            $table->foreign('id_produk')
                ->references('id_produk')
                ->on('produk')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique(['id_produk', 'nama']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('varian_produk');
    }
};
