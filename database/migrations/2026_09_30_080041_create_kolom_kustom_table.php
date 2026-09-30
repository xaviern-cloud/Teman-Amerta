<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kolom_kustom', function (Blueprint $table) {
            $table->increments('id_kolom_kustom');

            $table->string('nama_kolom', 150);

            $table->string('tipe_masukan', 20);
            $table->boolean('wajib')->default(false);

            $table->string('aturan_validasi', 255)->nullable();
            $table->smallInteger('urutan_tampil');

            $table->unsignedInteger('id_template_kustom');

            $table->string('petunjuk', 255)->nullable();
            $table->jsonb('opsi_pilihan')->nullable();

            $table->foreign('id_template_kustom')
                ->references('id_template_kustom')
                ->on('template_kustom')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kolom_kustom');
    }
};
