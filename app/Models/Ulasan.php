<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'peran',
        'komentar'
    ];

    // Validasi peran jika dibutuhkan dalam model
    // public static function booted()
    // {
    //     static::saving(function ($model) {
    //         if ($model->peran < 1 || $model->peran > 5) {
    //             throw new \InvalidArgumentException('Rating must be between 1 and 5.');
    //         }
    //     });
    // }
}

