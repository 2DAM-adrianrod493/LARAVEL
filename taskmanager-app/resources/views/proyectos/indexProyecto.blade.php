@extends('layouts.plantilla')

@section('title', 'Listado de Proyectos')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

<div class="d-flex justify-content-center" style="background-color: #000000; padding: 15px 0;">
    <h3 class="text-white">Listado de Proyectos</h3>
</div>

<!-- Botón Nuevo Proyecto -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #000000; padding: 15px 0;">
    <a href="{{ route('proyectos.create') }}"
       class="btn btn-outline-success"
       style="background-color: #FFFFFF;
              color: #000000;">
        Nuevo Proyecto
    </a>
</div>

<!-- Lista Proyectos -->
<div class="container mt-5">
    <div class="row">
        @foreach ($proyectos as $proyecto)
            <div class="col-4">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                        <p class="card-text">{{ $proyecto->descripcion }}</p>
                        <div class="mt-auto">
                            <a class="btn w-100 mb-2" style="background-color: #000000; color: white;">
                                Ver Tareas
                            </a>
                            <a href="{{route('proyectos.edit', $proyecto)}}" class="btn w-100 mb-2" style="background-color: #000000; color: white;">
                                Editar
                            </a>
                            <a class="btn w-100 mb-2" style="background-color: #000000; color: white;">
                                Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection