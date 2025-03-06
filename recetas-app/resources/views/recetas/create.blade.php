@extends('layouts.plantilla')

@section('title', 'Crear receta')

@section('buttonBack', route('recetas.index', $categoria))
@section('buttonBackText', 'Recetas')

@section('contenido')

<div class="d-flex justify-content-center bg-primary p-2 text-dark bg-opacity-25">
    <h3>Crea una nueva receta para la categoría: {{$categoria->nombre}}</h3>
</div>

<form class="container mt-2" action="{{route('recetas.store', $categoria)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="controlInputTitulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="controlInputTitulo" name="titulo">
    </div>
    <div class="mb-3">
        <label for="controlInputDescripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="controlInputDescripcion" rows="3" name="descripcion"></textarea>
    </div>  
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{route('recetas.index', $categoria)}}" class="btn btn-danger">Cancelar</a>
</form>

@endsection
