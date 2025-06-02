<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

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
            'alamat' => 'required|string',
            'keterangan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('foto_pengaduan'), $fotoName);
            $validatedData['foto'] = 'foto_pengaduan/' . $fotoName;
        }

        Pengaduan::create($validatedData);

        // Arahkan kembali ke halaman utama
        return redirect('/')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
