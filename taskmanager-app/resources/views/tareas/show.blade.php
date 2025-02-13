@extends('layouts.plantilla')

@section('title', 'Mostrar Tareas')

@section('contenido')

    <h1>Bienvenido a la Tarea {{$tarea}}</h1>
    
    <?php if ($proyecto != null): ?>
        <h3>El proyecto es:{{$proyecto}}</h3>
    <?php endif; ?>

@endsection