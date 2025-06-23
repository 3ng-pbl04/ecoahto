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
        Schema::create('pengaduans', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('no_telp');
    $table->string('email');
    $table->text('alamat');
    $table->text('foto'); // <= ini penting, gunakan string atau text
    $table->string('keterangan');
    $table->string('titik_koordinat')->nullable(); // untuk nanti
    $table->enum('status', ['Terkirim', 'Ditolak', 'Diterima', 'Dijadwalkan'])->default('Terkirim');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
