<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController; // <--- ESTA LÍNEA ES VITAL

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ofertas', OfertaController::class);