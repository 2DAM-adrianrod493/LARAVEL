<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\HomeController;

// Ruta Principal
Route::get('/', HomeController::class);

// Rutas RecetaController
Route::controller(RecetaController::class)->group(function () {
    Route::get('recetas', 'index');
    Route::get('recetas/create', 'create');
    Route::get('recetas/{receta}/{categoria?}', 'show');
});
