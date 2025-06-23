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
       Schema::create('ulasans', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('peran');
    $table->text('komentar');
    $table->timestamps();
});

        Schema::table('ulasans', function (Blueprint $table) {
            Schema::rename('ulasan', 'ulasans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ulasans', function (Blueprint $table) {
            Schema::rename('ulasans', 'ulasan');
        });
    }
};
