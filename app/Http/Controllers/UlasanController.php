<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function create()
{
    return view('ulasan.create');
}
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'peran' => 'required|string|max:255',
        'komentar' => 'required|string',
    ]);

    Ulasan::create($validatedData);

    //return redirect('/')->with('success', 'ulasan berhasil dikirim!');
    //return response('Ulasan berhasil dikirim!', 201);
    return back()->with('success', 'Ulasan berhasil dikirim!');
    }
}
