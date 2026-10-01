<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->increments('id_keranjang');

            $table->unsignedInteger('id_pengguna');

            $table->timestamps();

            $table->foreign('id_pengguna')
                ->references('id_pengguna')
                ->on('pengguna')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Satu pengguna hanya memiliki satu keranjang aktif
            $table->unique('id_pengguna');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
