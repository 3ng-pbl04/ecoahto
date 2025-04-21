<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_telp',
        'alamat',
        'keterangan',
        'foto',
        'latitude',
        'longitude',
    ];
}
