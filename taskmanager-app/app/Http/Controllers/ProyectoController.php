<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Listado Proyectos
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.indexProyecto', compact('proyectos'));
    }

    // Crear Proyecto
    public function create()
    {
        return view('proyectos.createProyecto');
    }

    // Guardar Datos del Proyecto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'duracion' => 'required|integer'
        ]);

        Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'duracion' => $request->duracion
        ]);

        return redirect()->route('proyectos.index')->with('success',
        'Proyecto Creado con Éxito');
    }

    // Editar Proyecto
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.editProyecto', compact('proyecto'));
    }

    // Actualizar Datos Proyecto
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'duracion' => 'required|integer'
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')->with('success',
        'Proyecto Editado con Éxito');
    }

    // Borrar Proyecto
    public function delete(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success',
        'Proyecto Eliminado con Éxito');
    }
}
