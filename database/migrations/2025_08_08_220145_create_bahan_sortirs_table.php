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
        Schema::create('bahan_sortirs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama_karyawan');
            $table->string('jenis');
            $table->integer('jumlah_timbangan');
            $table->dateTime('tanggal_penyortiran');
            $table->enum('status', ['Belum Digiling','Sudah Digiling'])->default('Belum Digiling');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_sortirs');
    }
};
