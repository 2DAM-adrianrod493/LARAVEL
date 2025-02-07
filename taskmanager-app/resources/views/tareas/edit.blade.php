@extends('layouts.plantilla')

@section('title', 'Editar Tarea: ' . $tarea->nombre)

@section('buttonBack', route('proyectos.tareas.index', $proyecto))
@section('buttonBackText', 'Tareas')

@section('contenido')

<!-- Título -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <h3 class="text-white">Editar Tarea: {{ $tarea->nombre }}</h3>
</div>

<!-- Formulario -->
<form class="container mt-2" action="{{ route('proyectos.tareas.update', [$proyecto, $tarea]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="controlInputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="controlInputNombre" name="nombre" value="{{ $tarea->nombre }}" required>
    </div>
    <div class="mb-3">
        <label for="controlInputDificultad" class="form-label">Dificultad</label>
        <input type="text" class="form-control" id="controlInputDificultad" name="dificultad" value="{{ $tarea->dificultad }}" required>
    </div>
    <div class="mb-3">
        <label for="controlInputEstado" class="form-label">Estado</label>
        <select class="form-control" id="controlInputEstado" name="estado" required>
            <option value="pendiente" {{ $tarea->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="en_progreso" {{ $tarea->estado == 'en_progreso' ? 'selected' : '' }}>En Progreso</option>
            <option value="completada" {{ $tarea->estado == 'completada' ? 'selected' : '' }}>Completada</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" value="{{ $tarea->duracion }}" min="1" required>
    </div>

    <button type="submit" class="btn" style="background-color: #ab677a; color: white;">Guardar</button>
    <a href="{{ route('proyectos.tareas.index', $proyecto) }}" class="btn" style="background-color: #4a446d; color: white;">Cancelar</a>
</form>

@endsection
