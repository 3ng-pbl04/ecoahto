<?php

namespace App\Exports;

use App\Models\HasilOlah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HasilOlahExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return HasilOlah::select('id', 'nama', 'bahan', 'warna')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama', 'Bahan', 'Warna'];
    }
}
