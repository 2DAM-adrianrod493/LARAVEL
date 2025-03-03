<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Proyecto;
use App\Models\Seguimiento;

class SeguimientoController extends Controller
{
    // Mostramos la Lista de Seguimientos
    public function index(Proyecto $proyecto, Tarea $tarea)
    {
        $seguimientos = $tarea->seguimientos;
        return view('seguimientos.index', compact('seguimientos', 'proyecto', 'tarea'));
    }

    // Ver los Detalles de un Seguimiento
    public function show(Proyecto $proyecto, Tarea $tarea, Seguimiento $seguimiento)
    {
        return view('seguimientos.show', compact('tarea', 'proyecto', 'seguimiento'));
    }

    // Crear Seguimiento
    public function create(Proyecto $proyecto, Tarea $tarea, Seguimiento $seguimiento)
    {
        return view('seguimientos.create', compact('proyecto', 'tarea'));
    }

    // Guardar los Datos del Seguimiento
    public function store(Request $request, Proyecto $proyecto, Tarea $tarea)
    {
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'usuario' => 'required|string',
            'descripcion' => 'required|string|min:5|max:50',
        ]);

        $tarea->seguimientos()->create([
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'usuario' => $request->usuario,
            'descripcion' => $request->descripcion,
            'tarea_id' => $tarea->id,
        ]);

        return redirect()->route('seguimientos.index', $proyecto, $tarea)
        ->with('success', 'Seguimiento Creado Correctamente');
    }

    // Borrar Seguimiento
    public function delete(Request $request, Proyecto $proyecto, Tarea $tarea, Seguimiento $seguimiento)
    {
        $seguimiento->delete($request->all());
        return redirect()->route('seguimientos.index', compact('proyecto', 'tarea', 'seguimiento'))
        ->with('success', 'Seguimiento Eliminado Correctamente');
    }

}
