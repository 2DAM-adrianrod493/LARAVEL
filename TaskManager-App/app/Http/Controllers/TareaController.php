<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Proyecto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Listado Tareas
    public function index(Proyecto $proyecto): View
    {
        $tareas = $proyecto->tareas;
        return view('tareas.index', compact('proyecto', 'tareas'));
    }

    // Ver Detalles Tarea
    public function show(Proyecto $proyecto, Tarea $tarea): View
    {
        return view('tareas.show', compact('proyecto', 'tarea'));
    }

    // Crear Tareas
    public function create(Proyecto $proyecto): View
    {
        return view('tareas.create', compact('proyecto'));
    }

    // Guardar Datos Tarea
    public function store(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dificultad' => 'required|string',
            'estado' => 'required|string|in:pendiente,en_progreso,completada',
            'duracion' => 'required|integer',
        ]);

        // Crear Tarea
        $proyecto->tareas()->create([
            'nombre' => $request->nombre,
            'dificultad' => $request->dificultad,
            'estado' => $request->estado,
            'duracion' => $request->duracion,
            'proyecto_id' => $proyecto->id,
        ]);

        return redirect()->route('proyectos.tareas.index', $proyecto)->with('success', 'Tarea Creada con Éxito');
    }

    // Editar Tarea
    public function edit(Proyecto $proyecto, Tarea $tarea): View
    {
        return view('tareas.edit', compact('proyecto', 'tarea'));
    }

    // Actualizar Datos Tarea
    public function update(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dificultad' => 'required|string',
            'estado' => 'required|string|in:pendiente,en_progreso,completada',
            'duracion' => 'required|integer',
        ]);

        // Actualizar Tarea
        $tarea->update([
            'nombre' => $request->nombre,
            'dificultad' => $request->dificultad,
            'estado' => $request->estado,
            'duracion' => $request->duracion,
        ]);

        return redirect()->route('proyectos.tareas.index', $proyecto)->with('success', 'Tarea Editada con Éxito');
    }

    // Borrar Tarea
    public function delete(Proyecto $proyecto, Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('proyectos.tareas.index', $proyecto)->with('success', 'Tarea Eliminada con Éxito');
    }
}
