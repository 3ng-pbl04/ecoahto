<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePageSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('page_settings', function (Blueprint $table) {
            // Ubah kolom agar nullable (jika belum nullable)
            $table->string('company_name')->nullable()->change();
            $table->string('hero_title')->nullable()->change();
            $table->text('hero_description')->nullable()->change();
            $table->string('about_title')->nullable()->change();
            $table->text('about_content')->nullable()->change();
            $table->string('footer_text')->nullable()->change();
            $table->string('footer_links')->nullable()->change();
            $table->string('call_to_action_text')->nullable()->change();
            $table->string('call_to_action_link')->nullable()->change();

            // Tambah kolom baru (jika perlu)
            if (!Schema::hasColumn('page_settings', 'hero_image')) {
                $table->string('hero_image')->nullable();
            }

            if (!Schema::hasColumn('page_settings', 'about_image')) {
                $table->string('about_image')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('page_settings', function (Blueprint $table) {
            // Rollback perubahan nullable
            $table->string('company_name')->nullable(false)->change();
            $table->string('hero_title')->nullable(false)->change();
            $table->text('hero_description')->nullable(false)->change();
            $table->string('about_title')->nullable(false)->change();
            $table->text('about_content')->nullable(false)->change();
            $table->string('footer_text')->nullable(false)->change();
            $table->string('footer_links')->nullable(false)->change();
            $table->string('call_to_action_text')->nullable(false)->change();
            $table->string('call_to_action_link')->nullable(false)->change();

            // Drop kolom baru jika rollback
            $table->dropColumn('hero_image');
            $table->dropColumn('about_image');
        });
    }
}
