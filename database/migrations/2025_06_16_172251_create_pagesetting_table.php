<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();

            //logo section
            $table->string('company_logo');
            $table->string('company_name');

            // Hero Section
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('hero_image')->nullable(); //

            // About Section
            $table->string('about_title');
            $table->text('visi');
            $table->text('misi');
            $table->text('keunggulan');
            $table->string('about_image')->nullable();

            // Footer Section
            $table->string('footer_text');
            $table->string('footer_links');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_settings');
    }
};
