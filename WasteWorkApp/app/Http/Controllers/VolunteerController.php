<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;

class VolunteerController extends Controller
{
    public function create()
{
    return view('volunteer.create');
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
            $foto->move(public_path('foto_volunteer'), $fotoName);
            $validatedData['foto'] = 'foto_volunteer/' . $fotoName;
        }

        volunteer::create($validatedData);

        // Arahkan kembali ke halaman utama
        return redirect('/')->with('success', 'volunteer berhasil dikirim!');
    }
}
