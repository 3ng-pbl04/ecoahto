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
    $table->integer('jumlah');
    $table->string('warna');
    $table->string('asal');
    $table->date('tanggal_olah');
    $table->enum('status', ['Mentah', 'Diolah', 'Jadi'])->default('Mentah');
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
