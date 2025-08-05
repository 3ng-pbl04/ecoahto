<?php

namespace App\Exports;

use App\Models\BahanBaku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BahanBakuExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return BahanBaku::select('kode', 'nama_bahan_baku', 'jumlah', 'warna', 'asal', 'tanggal_masuk', 'status')->get();
    }

    public function headings(): array
    {
        return ['Kode', 'Nama Bahan Baku', 'Jumlah', 'Warna', 'Asal', 'Tanggal Masuk', 'Status'];
    }
}
