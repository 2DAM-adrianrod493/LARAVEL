@extends('layouts.plantilla')

@section('title', 'Crear una Nueva Tarea')

@section('buttonBack', route('proyectos.tareas.index', $proyecto))
@section('buttonBackText', 'Tareas')

@section('contenido')

<!-- Título -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <h3 class="text-white">Crear Tarea para el Proyecto: {{ $proyecto->nombre }}</h3>
</div>

<!-- Formulario -->
<form class="container mt-2" action="{{ route('proyectos.tareas.store', $proyecto) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="controlInputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="controlInputNombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="controlInputDificultad" class="form-label">Dificultad</label>
        <input type="text" class="form-control" id="controlInputDificultad" name="dificultad" required>
    </div>
    <div class="mb-3">
        <label for="controlInputEstado" class="form-label">Estado</label>
        <select class="form-control" id="controlInputEstado" name="estado" required>
            <option value="pendiente">Pendiente</option>
            <option value="en_progreso">En Progreso</option>
            <option value="completada">Completada</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" min="1" required>
    </div>

    <button type="submit" class="btn" style="background-color: #ab677a; color: white;">Guardar</button>
    <a href="{{ route('proyectos.tareas.index', $proyecto) }}" class="btn" style="background-color: #4a446d; color: white;">Cancelar</a>
</form>

@endsection
