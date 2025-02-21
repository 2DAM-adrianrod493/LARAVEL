@extends('layouts.plantilla')

@section('title', 'Create')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

<div class="d-flex justify-content-center" style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
    <h3 class="text-white">Crear Nuevo Proyecto</h3>
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
        <label for="controlInputDuracion" class="form-label">Duración</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion" min="1">
    </div>
    
    <button type="submit" class="btn" style="background-color: #222222; color: white;">Guardar</button>
    <a href="{{ route('proyectos.index') }}" class="btn" style="background-color: #000000; color: white;">Cancelar</a>
</form>

@endsection