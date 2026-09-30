<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('template_kustom', function (Blueprint $table) {
            $table->increments('id_template_kustom');

            $table->unsignedInteger('id_produk');

            $table->string('nama_template', 150);
            $table->string('jenis_template', 20);
            $table->string('fakultas', 150)->nullable();
            $table->smallInteger('tahun');
            $table->string('guidebook', 255)->nullable();
            $table->string('status', 20);

            $table->foreign('id_produk')
                ->references('id_produk')
                ->on('produk')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('template_kustom');
    }
};
