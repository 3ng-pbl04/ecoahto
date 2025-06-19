<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string',
            'keterangan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        // Menyimpan file foto ke storage/app/public/pengaduan_foto
        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('pengaduan_foto', 'public');
        }

        // Menyimpan titik koordinat jika tersedia
        if ($request->filled('latitude') && $request->filled('longitude')) {
            $validatedData['titik_koordinat'] = $request->latitude . ',' . $request->longitude;
        }

        Pengaduan::create($validatedData);

        return redirect('/')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
