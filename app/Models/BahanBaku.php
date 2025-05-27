<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama_bahan_baku',
        'jumlah',
        'warna',
        'asal',
        'tanggal_olah',
        'status',
    ];
}
