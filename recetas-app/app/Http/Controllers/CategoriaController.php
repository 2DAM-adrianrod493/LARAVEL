<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Listado de Categorías
    public function index(): View {
        $categorias = Categoria::all();
        return view('categorias.indexCategoria', compact('categorias'));
    }

    // Crear Categorías
    public function create(): View
    {
        return view('categorias.createCategoria');
    }

    // Guardar Datos Categoría
    public function store(Request $request){
        Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('categorias.index')->with ('success',
        'Categoría Guardada Correctamente'
        );
    }

    // Actualizar Datos
    public function update(Request $request, Categoria $categoria){      
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

}
