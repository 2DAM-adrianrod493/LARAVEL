@extends('layouts.plantilla')

@section('title', 'Editar Proyecto ' . $proyecto->nombre)

@section('buttonBack', route('proyectos.index'))
@section('buttonBackText', 'Proyectos')

@section('contenido')

<!-- Título -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <h3 class="text-white">Editar Proyecto: {{ $proyecto->nombre }}</h3>
</div>

<!-- Formulario -->
<form class="container mt-2" action="{{ route('proyectos.update', $proyecto) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="controlInputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="controlInputNombre" name="nombre" value="{{ $proyecto->nombre }}">
    </div>
    <div class="mb-3">
        <label for="controlInputDescp" class="form-label">Descripción</label>
        <textarea class="form-control" id="controlInputDescp" rows="3" name="descripcion">{{ $proyecto->descripcion }}</textarea>
    </div>
    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración (Días)</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" value="{{ $proyecto->duracion }}">
    </div>
    
    <button type="submit" class="btn" style="background-color: #ab677a; color: white;">Guardar Cambios</button>
    <a href="{{ route('proyectos.index') }}" class="btn" style="background-color: #4a446d; color: white;">Cancelar</a>
</form>

@endsection
