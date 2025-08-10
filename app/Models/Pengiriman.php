<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengirimans'; 
    protected $fillable = [
        'nama_buyer',
        'jumlah_timbangan',
        'tanggal_kirim',
        'plat',
        'nama_sopir',
    ];
}
