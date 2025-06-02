<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\VolunteerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengaduan', PengaduanController::class);
Route::resource('volunteer', VolunteerController::class);




