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

    Route::delete('proyectos/{proyecto}', 'delete')->name('proyectos.delete');

});

// Tareas
Route::controller(TareaController::class)->group(function () {

    Route::get('proyectos/{proyecto}/tareas', 'index')->name('tareas.index');

    Route::get('proyectos/{proyecto}/tareas/create', 'create')->name('tareas.create');

    Route::post('proyectos/{proyecto}/tareas/store', 'store')->name('tareas.store');

    Route::get('proyectos/{proyecto}/tareas/{tarea}/edit', 'edit')->name('tareas.edit');

    Route::put('proyectos/{proyecto}/tareas/{tarea}', 'update')->name('tareas.update');

    Route::get('proyectos/{proyecto}/tareas/{tarea}', 'show')->name('tareas.show');

    Route::delete('proyectos/{proyecto}/tareas/{tarea}', 'delete')->name('tareas.delete');

});