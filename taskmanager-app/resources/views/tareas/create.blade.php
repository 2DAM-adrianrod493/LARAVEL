@extends('layouts.plantilla')

@section('title', 'Crear Tarea')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

<div class="d-flex justify-content-center" style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
    <h3 class="text-white">Crear Nueva Tarea</h3>
</div>

<!-- Formulario -->
<form class="container mt-2" action="{{ route('tareas.store', $proyecto) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="controlInputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="controlInputNombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="controlInputDificultad" class="form-label">Dificultad</label>
        <textarea class="form-control" id="controlInputDificultad" rows="3" name="dificultad"></textarea>
    </div>
    <div class="mb-3">
        <label for="controlInputEstado" class="form-label">Estado</label>
        <select class="form-control" id="controlInputEstado" name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="en_progreso">En progreso</option>
            <option value="completada">Completada</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" min="1">
    </div>
    
    <button type="submit" class="btn" style="background-color: #222222; color: white;">Guardar</button>
    <a href="{{ route('tareas.index', $proyecto) }}" class="btn" style="background-color: #000000; color: white;">Cancelar</a>
</form>

@endsection
