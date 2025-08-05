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
    $table->string('nama_sampah');
    $table->string('jenis_sampah'); // FK ke bahan_bakus.nama_bahan_baku (relasi manual)
    $table->string('nama_karyawan');
    $table->float('berat');
    $table->date('tanggal_timbang');
    $table->string('sumber'); // FK ke bahan_bakus.asal (relasi manual)
    $table->enum('status', ['Masih Digudang', 'Sudah Disortir'])->default('Masih Digudang');
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
