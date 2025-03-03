@extends('layouts.plantilla')

@section('title', 'Crear Seguimiento')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

<div class="d-flex justify-content-center" style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
    <h3 class="text-white">Crear Nuevo Seguimiento</h3>
</div>

<!-- Formulario -->
<form class="container mt-2" action="{{ route('seguimientos.store', $proyecto, $tarea) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
        <input type="date" class="form-control" name="fecha_inicio">
    </div>
    <div class="mb-3">
        <label for="fecha_fin" class="form-label">Fecha Fin</label>
        <input type="date" class="form-control" name="fecha_fin">
    </div>
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario">
    </div>
    
    <button type="submit" class="btn" style="background-color: #222222; color: white;">Guardar</button>
    <a href="{{ route('seguimientos.index', $proyecto, $tarea) }}" class="btn" style="background-color: #000000; color: white;">Cancelar</a>
</form>

@endsection
