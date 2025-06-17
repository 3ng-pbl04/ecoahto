<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageSetting;
use Illuminate\Support\Facades\Storage;

class PageSettingController extends Controller
{
    /**
     * Menampilkan halaman frontend dengan data page setting.
     */
    public function index()
    {
        $pageSetting = PageSetting::first();
        return view('welcome', compact('pageSetting'));
    }

    /**
     * Menampilkan form edit.
     */
    public function edit()
    {
        $pageSetting = PageSetting::first();
        return view('admin.page-setting.edit', compact('pageSetting'));
    }

    /**
     * Memperbarui data PageSetting.
     */
    public function update(Request $request)
    {
        $request->validate([
            // Logo Section
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'company_name' => 'required|string|max:255',

            // Hero Section
            'hero_title' => 'required|string|max:255',
            'hero_description' => 'required|string',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            // About Section
            'about_title' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'keunggulan' => 'required|string',
            'about_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            // Footer Section
            'footer_text' => 'required|string|max:255',
            'footer_links' => 'required|string|max:255',
        ]);

        $pageSetting = PageSetting::first();

        // Handle file upload
        if ($request->hasFile('company_logo')) {
            $pageSetting->company_logo = $request->file('company_logo')->store('logos', 'public');
        }

        if ($request->hasFile('hero_image')) {
            $pageSetting->hero_image = $request->file('hero_image')->store('hero-images', 'public');
        }

        if ($request->hasFile('about_image')) {
            $pageSetting->about_image = $request->file('about_image')->store('about-images', 'public');
        }

        // Update data lainnya
        $pageSetting->fill($request->except(['company_logo', 'hero_image', 'about_image']))->save();

        return redirect()->back()->with('success', 'Pengaturan halaman berhasil diperbarui.');
    }
}
