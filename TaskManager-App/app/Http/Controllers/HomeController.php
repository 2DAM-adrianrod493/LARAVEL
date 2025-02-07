<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

class HomeController extends Controller
{
    public function __invoke()
    {
        $proyectos = Proyecto::all();
        return view('home', compact('proyectos'));
    }
}
