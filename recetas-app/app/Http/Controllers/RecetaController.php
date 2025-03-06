<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Categoria;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index(Categoria $categoria)
    {
        $recetas = $categoria->recetas()->get();
        return view('recetas.index', compact('recetas', 'categoria'));
    }

    public function create(Categoria $categoria)
    {
        return view('recetas.create', compact('categoria'));
    }

    public function store(Request $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'instrucciones' => 'required',
            'tiempo_cocinado' => 'required|integer',
            'dificultad' => 'required',
        ]);
        $categoria->recetas()->create([
            'titulo' => $validated['titulo'],
            'descripcion' => $validated['descripcion'],
            'instrucciones' => $validated['instrucciones'],
            'tiempo_cocinado' => $validated['tiempo_cocinado'],
            'dificultad' => $validated['dificultad'],
        ]);
        return redirect()->route('recetas.index', $categoria)->with('success', 'Receta creada correctamente');
    }

    public function show(Categoria $categoria, Receta $receta)
    {
        return view('recetas.show', compact('receta', 'categoria'));
    }
    public function edit(Categoria $categoria, Receta $receta)
    {
        return view('recetas.edit', compact('receta', 'categoria'));
    }

    public function update(Request $request, Categoria $categoria, Receta $receta)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'instrucciones' => 'required',
            'tiempo_cocinado' => 'required|integer',
            'dificultad' => 'required',
        ]);

        $receta->update($validated);

        return redirect()->route('recetas.index', $categoria)->with('success', 'Receta actualizada correctamente');
    }

    public function destroy(Categoria $categoria, Receta $receta)
    {
        $receta->delete();

        return redirect()->route('recetas.index', $categoria)->with('success', 'Receta eliminada correctamente');
    }
}
