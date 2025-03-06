@extends('layouts.plantilla')

@section('title', 'Ver receta ' . $receta->titulo)

@section('buttonBack', route('recetas.index', $categoria))
@section('buttonBackText', 'Volver a Recetas')

@section('contenido')

<div class="d-flex justify-content-center bg-info p-2 text-dark bg-opacity-25">
    <h3>Receta: {{ $receta->titulo }}</h3>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $receta->titulo }}</h5>
                    <p class="card-text">{{ $receta->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
