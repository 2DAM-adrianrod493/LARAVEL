<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

// Ruta Principal
Route::get('/', HomeController::class)->name('home');

// Rutas Categorías
Route::controller(CategoriaController::class)->group(function () {
    Route::get('categorias', 'index')->name('categorias.index');
    Route::get('categorias/create', 'create')->name('categorias.create');
    Route::post('categorias', 'store')->name('categorias.store');
    Route::get('categorias/{categoria}/edit', 'edit')->name('categorias.edit');
    Route::put('categorias/{categoria}', 'update')->name('categorias.update');
    Route::delete('categorias/{categoria}', 'delete')->name('categorias.delete');
});

// Rutas Recetas
Route::controller(RecetaController::class)->group(function () {
    Route::get('categorias/{categoria}/recetas', 'index')->name('recetas.index');
    Route::get('categorias/{categoria}/recetas/create', 'create')->name('recetas.create');
    Route::post('categorias/{categoria}/recetas/store', 'store')->name('recetas.store');
    Route::get('categorias/{categoria}/recetas/{receta}', 'show')->name('recetas.show');
    Route::get('categorias/{categoria}/recetas/{receta}/edit', 'edit')->name('recetas.edit');
    Route::put('categorias/{categoria}/recetas/{receta}', 'update')->name('recetas.update');
    Route::delete('categorias/{categoria}/recetas/{receta}', 'destroy')->name('recetas.destroy');
});
