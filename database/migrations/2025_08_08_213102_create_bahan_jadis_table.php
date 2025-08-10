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
        Schema::create('bahan_jadis', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('warna');
            $table->string('jenis');
            $table->integer('jumlah_timbangan');
            $table->dateTime('tanggal_pengarungan');
            $table->enum('status', ['Belum Dikirim','Sudah Dikirim'])->default('Belum Disortir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_jadis');
    }
};
