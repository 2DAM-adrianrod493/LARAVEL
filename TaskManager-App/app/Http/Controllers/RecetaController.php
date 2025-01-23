<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        return 'Bienvenido a las Recetas';
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