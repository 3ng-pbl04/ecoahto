<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
