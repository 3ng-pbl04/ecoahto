<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'link_produk',
    ];
}
