<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilOlah extends Model
{

     use HasFactory;
        protected $table = 'hasil_olah'; 
    protected $fillable = [
        'nama',
        'bahan',
        'warna',
    ];
}
