<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Mostramos la lista de Proyectos
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

        Proyecto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'duracion'=>$request->duracion
        ]);

        return redirect()->route('proyectos.index')->with('success','Proyecto Creado Exitosamente');
    }

    // Editar Proyecto
    public function edit(Proyecto $proyecto)
    {
        return $proyecto;
    }

    // Actualizar Datos
    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        return redirect()->route('proyectos.index');
    }
}
