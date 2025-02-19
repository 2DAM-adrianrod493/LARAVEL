<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'duracion' => 'required|integer'
        ]);

        Proyecto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'duracion'=>$request->duracion
        ]);

        return redirect()->route('proyectos.index')->with('success','Creado Exitosamente');
    }

    // Editar Proyecto
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.editProyecto', compact('proyecto'));
    }

    // Actualizar Datos
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'duracion' => 'required|integer'
        ]);

        $proyecto->update($request->all());
        return redirect()->route('proyectos.index')->with('success','Editado Correctamente');
    }

    // Eliminar Proyecto
    public function delete(Request $request, Proyecto $proyecto)
    {
        $proyecto->delete($request->all());
        return redirect()->route('proyectos.index')->with('success', 'Eliminado Correctamente');
    }
}
