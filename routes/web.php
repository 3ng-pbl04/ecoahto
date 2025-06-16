<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\PageSettingController;

use App\Models\Sampah;
use App\Models\BahanBaku;
use App\Models\HasilOlah;

use App\Exports\SampahExport;
use App\Exports\BahanBakuExport;
use App\Exports\HasilOlahExport;




Route::resource('pengaduan', PengaduanController::class);
Route::resource('volunteer', VolunteerController::class);
Route::post('/', [UlasanController::class, 'store'])->name('ulasan.store');
Route::get('/', [PostinganController::class, 'index'])->name('welcome');




Route::get('/export-sampah', function () {
    return Excel::download(new SampahExport, 'data-sampah.xlsx');
})->name('export.sampah');

Route::get('/export-sampah-pdf', function () {
    $sampahs = Sampah::all();
    $pdf = Pdf::loadView('exports.sampah-pdf', compact('sampahs'));
    return $pdf->download('data-sampah.pdf');
})->name('export.sampah.pdf');


Route::get('/export-bahan-baku-excel', function () {
    return Excel::download(new BahanBakuExport, 'bahan-baku.xlsx');
})->name('export.bahan.excel');

Route::get('/export-bahan-baku-pdf', function () {
    $bahans = BahanBaku::all();
    $pdf = Pdf::loadView('exports.bahan-baku-pdf', compact('bahans'));
    return $pdf->download('bahan-baku.pdf');
})->name('export.bahan.pdf');


Route::get('/export-hasil-olah-excel', function () {
    return Excel::download(new HasilOlahExport, 'hasil-olah.xlsx');
})->name('export.hasilolah.excel');

Route::get('/export-hasil-olah-pdf', function () {
    $hasils = HasilOlah::all();
    $pdf = Pdf::loadView('exports.export-hasilolah', compact('hasils'));
    return $pdf->download('hasil-olah.pdf');
})->name('export.hasilolah.pdf');

Route::get('/berita/detail1', function () {
    return view('berita.detailberita1');
})->name('berita.detail1');

Route::get('/login', function () {
    return view('login');
})->name('login');




