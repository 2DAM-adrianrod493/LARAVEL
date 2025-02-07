<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');

// Proyectos
Route::controller(ProyectoController::class)->group(function () {

    // Listar Proyectos
    Route::get('proyectos', 'index')->name('proyectos.index');

    // Crear y Guardar Proyecto
    Route::get('proyectos/create', 'create')->name('proyectos.create');
    Route::post('proyectos', 'store')->name('proyectos.store');
    
    // Editar y Actualizar Datos Proyecto
    Route::get('proyectos/{proyecto}/edit', 'edit')->name('proyectos.edit');
    Route::put('proyectos/{proyecto}', 'update')->name('proyectos.update');

    // Eliminar Proyecto
    Route::delete('proyectos/{proyecto}', 'delete')->name('proyectos.delete');
});

// Tareas
Route::controller(TareaController::class)->group(function () {

    // Listar Tareas
    Route::get('proyectos/{proyecto}/tareas', 'index')->name('proyectos.tareas.index');
    
    // Ver Detalles Tarea
    Route::get('proyectos/{proyecto}/tareas/{tarea}', 'show')->name('proyectos.tareas.show');

    // Crear y Guaradar Tarea
    Route::get('proyectos/{proyecto}/tareas/create', 'create')->name('proyectos.tareas.create');
    Route::post('proyectos/{proyecto}/tareas', 'store')->name('proyectos.tareas.store');
    
    // Editar y Actualizar Datos Tarea
    Route::get('proyectos/{proyecto}/tareas/{tarea}/edit', 'edit')->name('proyectos.tareas.edit');
    Route::put('proyectos/{proyecto}/tareas/{tarea}', 'update')->name('proyectos.tareas.update');
    
    // Eliminar Tarea
    Route::delete('proyectos/{proyecto}/tareas/{tarea}', 'delete')->name('proyectos.tareas.delete');
});