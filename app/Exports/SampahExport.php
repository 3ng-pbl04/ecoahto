<?php
namespace App\Exports;

use App\Models\Sampah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SampahExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Sampah::select('jenis_sampah', 'warna', 'berat', 'tanggal_masuk', 'sumber', 'status')->get();
    }

    public function headings(): array
    {
        return ['Jenis Sampah', 'Warna', 'Berat (kg)', 'Tanggal Masuk', 'Sumber', 'Status'];
    }
}
