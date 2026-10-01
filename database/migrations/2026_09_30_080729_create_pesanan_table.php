<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id_pesanan');

            $table->string('kode_pesanan', 50)->unique();
            $table->timestamp('tanggal_pesanan');
            $table->decimal('total_pembayaran', 12, 2);

            $table->string('status', 30)->default('DALAM PROSES');

            $table->unsignedInteger('id_pengguna');

            $table->foreign('id_pengguna')
                ->references('id_pengguna')
                ->on('pengguna')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
