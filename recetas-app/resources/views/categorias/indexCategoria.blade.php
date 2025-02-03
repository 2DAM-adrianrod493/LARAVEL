@extends('layouts.plantilla')


@section('title', 'Categorías')


@section('buttonBack', route('home'))
@section('buttonBackText', 'Home')

<!--Como nuestro contenido ocupa más que
    un texto abrimos y cerramos la sección-->
    @section('contenido')


    <div class="d-flex justify-content-center bg-success p-2 text-dark bg-opacity-25">
        <h3>Categorías</h3>


    </div>


    <div class="d-flex justify-content-end bg-success p-2 text-dark bg-opacity-25">
        <a href="{{ route('categorias.create') }}" class="btn btn-outline-success">
            Nueva Categoría
        </a>
    </div>


    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <div class="container mt-5">
        <div class="row">
            @foreach ($categorias as $cat)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cat->nombre }}</h5>
                            <p class="card-text">{{ $cat->descripcion }}</p>
                            {{-- <a href="{{ route('categorias.edit', $cat) }}" class="btn btn-warning">Editar categoría</a>
                            <a href="{{ route('recetas.index', $cat) }}" class="btn btn-primary ">Ver recetas</a>
                            <form action={{ route('categorias.delete', $cat) }} method="post" class="mt-1">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar categoría</button>
                            </form> --}}




                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
