<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

use App\Models\Receta;

class RecetaController extends Controller
{
    public function index(Categoria $categoria)
    {
        $recetas = $categoria->recetas()->get();

        return view('recetas.index', compact('recetas', 'categoria'));
    }

    public function create()
    {
        return 'Sección para crear una Receta';
    }

    public function show($receta, $categoria = null)
    {
        
        // if ($categoria != null) {
        //     return "Detalles de la receta $receta, de la categoría $categoria";
        // } else {
        //     return "Detalles de la receta $receta";
        // }
        
        return view('recetas.show', ['receta' => $receta, 'categoria' => $categoria]);
    }
}