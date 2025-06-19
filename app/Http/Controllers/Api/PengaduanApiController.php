<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;

class PengaduanApiController extends Controller
{
    public function index()
    {
        return response()->json(Pengaduan::all());
    }
}
