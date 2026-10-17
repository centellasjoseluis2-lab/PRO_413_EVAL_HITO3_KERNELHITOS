<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\SolicitudSoporteController;

// Ruta para guardar la solicitud (POST)
Route::post('/solicitudes', [SolicitudSoporteController::class, 'store'])->name('solicitudes.store');