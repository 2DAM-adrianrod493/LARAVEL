@extends('layouts.plantilla')

@section('title', 'Detalles de la Tarea: ' . $tarea->nombre)

@section('buttonBack', route('proyectos.tareas.index', $proyecto))
@section('buttonBackText', 'Tareas')

@section('contenido')

<!-- Título -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <h3 class="text-white">Detalles de la Tarea: {{ $tarea->nombre }}</h3>
</div>

<!-- Detalles Tarea -->
<div class="container mt-5">
    <p><strong>Estado:</strong> {{ ucfirst($tarea->estado) }}</p>
    <p><strong>Dificultad:</strong> {{ $tarea->dificultad }}</p>
    <p><strong>Duración:</strong> {{ $tarea->duracion }} h</p>
    <p><strong>Proyecto:</strong> {{ $proyecto->nombre }}</p>
    <a href="{{ route('proyectos.tareas.index', $proyecto) }}" class="btn" style="background-color: #4a446d; color: white;">Volver a Tareas</a>
</div>

@endsection
