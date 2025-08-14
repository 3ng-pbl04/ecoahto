<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bahan_bakus', function (Blueprint $table) {
    $table->id();
    $table->string('kode');
    $table->string('nama_bahan_baku');
    $table->integer('jumlah_timbangan');
    $table->integer('jumlah_karung');
    $table->string('warna');
    $table->string('asal');
    $table->dateTime('tanggal_masuk');
    $table->enum('status', ['Belum Disortir','Sudah Disortir'])->default('Belum Disortir');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_bakus');
    }
};
