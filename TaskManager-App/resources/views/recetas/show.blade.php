@extends('layouts.plantilla')

@section('title', 'Receta' . $receta)

@section('contenido')

    <h1>Bienvenido a la Receta {{$receta}}</h1>
    <?php if ($categoria != null): ?>
        <h3>La categoría es: {{$categoria}}</h3>
    <?php endif; ?>

@endsection