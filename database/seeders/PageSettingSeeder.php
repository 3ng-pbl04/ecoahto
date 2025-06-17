<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageSetting;

class PageSettingSeeder extends Seeder
{
    public function run(): void
    {
        PageSetting::create([
            // Logo Section
            'company_logo' => 'images/LOGO.png',
            'company_name' => 'Trash2Move',

            // Hero Section
            'hero_title' => 'Selamat Datang di Trash2Move!',
            'hero_description' => 'Kami mengubah sampah menjadi solusi ramah lingkungan.',
            'hero_image' => 'images/sampah.jpg',

            // About Section
            'about_title' => 'Tentang Kami',
            'visi' => 'Menjadi pelopor pengelolaan sampah berkelanjutan di Indonesia.',
            'misi' => '1. Edukasi masyarakat.\n2. Daur ulang inovatif.\n3. Kolaborasi dengan komunitas.',
            'keunggulan' => 'Produk 100% daur ulang, berkualitas tinggi, dan ramah lingkungan.',
            'about_image' => 'images/team.jpg',

            // Footer Section
            'footer_text' => '© 2025 Trash2Move. Semua hak dilindungi.',
            'footer_links' => 'https://instagram.com/trash2move',
        ]);
    }
}
