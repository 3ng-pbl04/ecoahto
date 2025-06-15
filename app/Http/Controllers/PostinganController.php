<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;
use App\Models\Berita;
use App\Models\ulasan;


class PostinganController extends Controller
{
    // Menampilkan semua postingan ke halaman welcome.blade.php
        public function index()
        {
            $postingans = Postingan::orderBy('id', 'asc')->take(6)->get();
            $beritas = Berita::orderBy('id', 'desc')->take(3)->get(); // Atau semua berita jika ingin
            $ulasans = Ulasan::latest()->take(5)->get();

            return view('welcome', compact('postingans', 'beritas', 'ulasans'));
        }


    // Menyimpan data postingan baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'nullable|string|max:50',
            'rating' => 'nullable|string|max:10',
            'link' => 'nullable|url|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Simpan file gambar jika ada
        if ($request->hasFile('foto')) {
            $validatedData['gambar'] = $request->file('foto')->store('postingans', 'public');
        }

        // Simpan data ke database
        Postingan::create($validatedData);

        return redirect()->back()->with('success', 'Postingan berhasil disimpan!');
    }
}
