<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ProyectoController;

// Ruta Principal
Route::get('/', HomeController::class)->name('home');

// Proyectos
Route::controller(ProyectoController::class)->group(function () {

    Route::get('proyectos', 'index')->name('proyectos.index');

    Route::get('proyectos/create', 'create')->name('proyectos.create');

    Route::post('proyectos', 'store')->name('proyectos.store');

    Route::get('proyectos/{proyecto}/edit', 'edit')->name('proyectos.edit');

    Route::put('proyectos/{proyecto}', 'update')->name('proyectos.update');

});

// Tareas
Route::controller(TareaController::class)->group(function () {

    Route::get('tareas', 'index');

    Route::get('tareas/create', 'create');
    
    Route::get('tareas/{tarea}/{proyecto?}', 'show');

});