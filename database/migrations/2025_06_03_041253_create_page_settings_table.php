<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePageSettingsNullableAndAddImages extends Migration
{
    public function up()
    {
        Schema::table('page_settings', function (Blueprint $table) {
            // Ubah kolom yang ada supaya nullable (boleh kosong)
            $table->string('company_name')->nullable()->change();
            $table->string('hero_title')->nullable()->change();
            $table->text('hero_description')->nullable()->change();
            $table->string('hero_image')->nullable(); // tambahkan kolom untuk foto hero
            $table->string('about_title')->nullable()->change();
            $table->text('about_content')->nullable()->change();
            $table->string('about_image')->nullable(); // foto tentang kami
            $table->string('footer_text')->nullable()->change();
            $table->string('footer_links')->nullable()->change();
            $table->string('call_to_action_text')->nullable()->change();
            $table->string('call_to_action_link')->nullable()->change();
            // tambahkan kolom lain jika diperlukan
        });
    }

    public function down()
    {
        Schema::table('page_settings', function (Blueprint $table) {
            // rollback ke kondisi NOT NULL (sesuaikan jika perlu)
            $table->string('company_name')->nullable(false)->change();
            $table->string('hero_title')->nullable(false)->change();
            $table->text('hero_description')->nullable(false)->change();
            $table->dropColumn('hero_image');
            $table->string('about_title')->nullable(false)->change();
            $table->text('about_content')->nullable(false)->change();
            $table->dropColumn('about_image');
            $table->string('footer_text')->nullable(false)->change();
            $table->string('footer_links')->nullable(false)->change();
            $table->string('call_to_action_text')->nullable(false)->change();
            $table->string('call_to_action_link')->nullable(false)->change();
        });
    }
}
