<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PengaduanApiController;

Route::get('/pengaduan-maps', [PengaduanApiController::class, 'index']);
