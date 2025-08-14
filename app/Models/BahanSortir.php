<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanSortir extends Model
{
    use HasFactory;
    protected $table = 'bahan_sortirs'; 
    protected $fillable = [
        'kode',
        'karyawan_id',
        'jenis',
        'warna',
        'jumlah_timbangan',
        'tanggal_penyortiran',
        'status',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

}

