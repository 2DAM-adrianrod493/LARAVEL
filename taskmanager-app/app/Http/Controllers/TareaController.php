<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Inicio
    public function index() {
        return "Inicio";
    }

    // Listar Tareas
    public function show($proyecto=null, $tarea) {
        if ($proyecto != null) {
            return "Detalles de la tarea $tarea, del proyecto $proyecto";
        } else {
            return "Detalles de la tarea $tarea";
        }
    }

    // Crear Tareas
    public function create() {
        return "Crear Tarea";
    }

    // Crear Tareas
    public function edit() {
        return "Editar Tarea";
    }

    // Crear Tareas
    public function delete() {
        return "Borrar Tarea";
    }

}
