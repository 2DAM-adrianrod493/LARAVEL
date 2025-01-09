<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

// Ruta Principal
Route::get('/', function () {
    return "Bienvenido A La Página Home";
});

// Rutas de Recetas con un Controlador Dedicado
Route::prefix('recetas')->name('recetas.')->group(function () {
    // Página Principal de Recetas
    Route::get('/', function () {
        return "Bienvenido A Mi Recetario";
    })->name('index');

    // Página para Crear una Receta
    Route::get('create', function () {
        return "Sección para Crear Recetas";
    })->name('create');

    // Mostrar recetas por categoría y receta (opcional)
    Route::get('{categoria}/{receta?}', function ($categoria, $receta = null) {
        if ($receta === null) {
            return "Recetas de las categorías: $categoria";
        } else {
            return "Categoría $categoria: Detalle de la receta $receta";
        }
    })->name('show');
});
