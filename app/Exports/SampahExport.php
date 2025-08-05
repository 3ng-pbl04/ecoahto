<?php
namespace App\Exports;

use App\Models\Sampah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SampahExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Sampah::select('nama_sampah','jenis_sampah', 'nama_karyawan', 'berat', 'tanggal_timbang', 'sumber', 'status')->get();
    }

    public function headings(): array
    {
        return ['nama_sampah','jenis_sampah', 'nama_karyawan', 'berat', 'tanggal_timbang', 'sumber', 'status'];
    }
}
