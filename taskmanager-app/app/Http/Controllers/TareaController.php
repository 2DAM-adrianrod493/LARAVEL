<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Proyecto;

class TareaController extends Controller
{
    // Mostramos la Lista de Tareas
    public function index(Proyecto $proyecto)
    {
        $tareas = $proyecto->tareas;
        return view('tareas.index', compact('tareas', 'proyecto'));
    }

    // Ver los Detalles de una Tarea
    public function show(Proyecto $proyecto, Tarea $tarea)
    {
        return view('tareas.show', compact('proyecto', 'tarea'));
    }

    // Crear Tarea
    public function create(Proyecto $proyecto)
    {
        return view('tareas.create', compact('proyecto'));
    }

    // Guardar los Datos de la Tarea
    public function store(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dificultad' => 'required|string',
            'estado' => 'required|string|in:completada,en_progreso,pendiente',
            'duracion' => 'required|integer',
        ]);

        $proyecto->tareas()->create([
            'nombre' => $request->nombre,
            'dificultad' => $request->dificultad,
            'estado' => $request->estado,
            'duracion' => $request->duracion,
            'proyecto_id' => $proyecto->id,
        ]);

        return redirect()->route('tareas.index', $proyecto)
        ->with('success', 'Tarea Creada Correctamente');
    }

    // Editar Tarea
    public function edit(Proyecto $proyecto, Tarea $tarea)
    {
        return view('tareas.edit', compact('proyecto', 'tarea'));
    }

    // Actualizar Datos Tarea
    public function update(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dificultad' => 'required|string',
            'estado' => 'required|string|in:completada,en_progreso,pendiente',
            'duracion' => 'required|integer',
        ]);

        // Actualizar Tarea
        $tarea->update([
            'nombre' => $request->nombre,
            'dificultad' => $request->dificultad,
            'estado' => $request->estado,
            'duracion' => $request->duracion,
        ]);

        return redirect()->route('tareas.show', [$proyecto. $tarea])
        ->with('success', 'Tarea Editada Correctamente');
    }

    // Borrar Tarea
    public function delete(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        $tarea->delete($request->all());
        return redirect()->route('tareas.index', compact('proyecto'))
        ->with('success', 'Tarea Eliminada Correctamente');
    }

}
