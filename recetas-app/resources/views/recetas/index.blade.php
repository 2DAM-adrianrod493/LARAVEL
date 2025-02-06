@extends('layouts.plantilla')


@section('title', 'Recetas de ' . $categoria->nombre)


@section('buttonBack', route('categorias.index'))
@section('buttonBackText', 'Volver a Categorías')


@section('contenido')


    <div class="d-flex justify-content-center bg-primary p-2 text-dark bg-opacity-25">
        <h3>Recetas de la categoría: {{ $categoria->nombre }}</h3>
    </div>


    <div class="d-flex justify-content-end bg-primary p-2 text-dark bg-opacity-25">
        <a href="{{ route('recetas.create', $categoria) }}" class="btn btn-outline-primary">
            Nueva Receta
        </a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container mt-5">
        <div class="row">
            @foreach ($recetas as $receta)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $receta->titulo }}</h5>
                            <p class="card-text">{{ $receta->descripcion }}</p>
                            <a href="{{route('recetas.show', [$categoria, $receta])}}" class="btn btn-info">Ver receta</a>                          
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection



