<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'rating',
        'deskripsi',
    ];

    // Validasi rating jika dibutuhkan dalam model
    public static function booted()
    {
        static::saving(function ($model) {
            if ($model->rating < 1 || $model->rating > 5) {
                throw new \InvalidArgumentException('Rating must be between 1 and 5.');
            }
        });
    }
}
