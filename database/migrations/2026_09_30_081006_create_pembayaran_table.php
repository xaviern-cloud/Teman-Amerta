<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');

            $table->string('bukti_pembayaran', 255);

            $table->string('status', 20)->default('DALAM PROSES');

            $table->string('jenis_pembayaran', 20);

            $table->decimal('nominal_pembayaran', 12, 2);

            $table->unsignedInteger('id_pesanan');

            $table->timestamp('diunggah_pada')->nullable();
            $table->timestamp('diverifikasi_pada')->nullable();

            $table->text('catatan_verifikasi')->nullable();

            $table->foreign('id_pesanan')
                ->references('id_pesanan')
                ->on('pesanan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
