@extends('layouts.plantilla')

@section('title', 'Crear un Nuevo Proyecto')

@section('buttonBack', route('proyectos.index'))
@section('buttonBackText', 'Proyectos')

@section('contenido')

<!-- Título -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <h3 class="text-white">Crear un Nuevo Proyecto</h3>
</div>

<!-- Formulario -->
<form class="container mt-2" action="{{ route('proyectos.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="controlInputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="controlInputNombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="controlInputDescp" class="form-label">Descripción</label>
        <textarea class="form-control" id="controlInputDescp" rows="3" name="descripcion"></textarea>
    </div>
    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración (Días)</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" min="1">
    </div>
    
    <button type="submit" class="btn" style="background-color: #ab677a; color: white;">Guardar</button>
    <a href="{{ route('proyectos.index') }}" class="btn" style="background-color: #4a446d; color: white;">Cancelar</a>
</form>

@endsection
