<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome')->with('success', Session::get('success'));
});

Route::resource('pengaduan', PengaduanController::class);
Route::resource('volunteer', VolunteerController::class);
Route::resource('ulasan', UlasanController::class);


Route::get('/login', function () {
    return view('login');
})->name('login');

