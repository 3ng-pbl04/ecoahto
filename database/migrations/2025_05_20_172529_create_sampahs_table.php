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
       Schema::create('sampahs', function (Blueprint $table) {
    $table->id();
    $table->string('jenis_sampah'); // FK ke bahan_bakus.nama_bahan_baku (relasi manual)
    $table->string('warna');
    $table->float('berat');
    $table->date('tanggal_masuk');
    $table->string('sumber'); // FK ke bahan_bakus.asal (relasi manual)
    $table->enum('status', ['Masuk', 'Disortir', 'Dicacah', 'Dikeringkan', 'Dipilah', 'Selesai'])->default('Masuk');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sampahs');
    }
};
