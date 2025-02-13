<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ProyectoController;

// Ruta Principal
Route::get('/', HomeController::class)->name('home');


// Tareas
Route::controller(TareaController::class)->group(function () {

    Route::get('tareas', 'index');

    Route::get('tareas/create', 'create');
    
    Route::get('tareas/{tarea}/{proyecto?}', 'show');

});