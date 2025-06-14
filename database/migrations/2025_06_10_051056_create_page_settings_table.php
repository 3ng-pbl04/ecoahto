<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('about_title');
            $table->text('about_content');
            $table->string('footer_text');
            $table->string('footer_links');
            $table->string('call_to_action_text');
            $table->string('call_to_action_link');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_settings');
    }
};
