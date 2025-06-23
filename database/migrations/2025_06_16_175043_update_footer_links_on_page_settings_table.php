<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('page_settings', function (Blueprint $table) {
            // Hapus kolom footer_links
            $table->dropColumn('footer_links');

            // Tambahkan kolom link sosial media
            $table->string('facebook_link')->nullable()->after('footer_text');
            $table->string('instagram_link')->nullable()->after('facebook_link');
            $table->string('twitter_link')->nullable()->after('instagram_link');
            $table->string('youtube_link')->nullable()->after('twitter_link');
            $table->string('tiktok_link')->nullable()->after('youtube_link');
        });
    }

    public function down(): void
    {
        Schema::table('page_settings', function (Blueprint $table) {
            // Rollback: Tambahkan kembali footer_links
            $table->string('footer_links')->nullable();

            // Hapus kolom sosial media
            $table->dropColumn([
                'facebook_link',
                'instagram_link',
                'twitter_link',
                'youtube_link',
                'tiktok_link',
            ]);
        });
    }
};
