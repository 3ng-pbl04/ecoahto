<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanJadi extends Model
{
    use HasFactory;
    protected $table = 'bahan_jadis'; 
    protected $fillable = [
        'kode',
        'warna',
        'jenis',
        'jumlah_timbangan',
        'jumlah_karung',
        'tanggal_pengarungan',
        'status',
    ];
}
