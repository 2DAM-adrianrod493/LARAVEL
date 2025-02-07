@extends('layouts.plantilla')

@section('title', 'Listado de Proyectos')

@section('buttonBack', route('home'))
@section('buttonBackText', 'Home')

@section('contenido')

<!-- Título -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <h3 class="text-white">Listado de Proyectos</h3>
</div>

<!-- Botón Nuevo Proyecto -->
<div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
    <a href="{{ route('proyectos.create') }}" class="btn" style="background-color: white; color: #4a446d;">
        Nuevo Proyecto
    </a>
</div>

<!-- Listado de Proyectos -->
<div class="container mt-5">
    <div class="row">
        @foreach ($proyectos as $proyecto)
            <div class="col-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                        <p class="card-text">{{ $proyecto->descripcion }}</p>

                        <!-- Botones -->
                        <div class="mt-auto">
                            <!-- Ver Tareas -->
                            <a href="{{ route('proyectos.tareas.index', $proyecto) }}" class="btn w-100 mb-2" style="background-color: #d086a0; color: white;">
                                Ver
                            </a>

                            <!-- Editar Proyecto -->
                            <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn w-100 mb-2" style="background-color: #ab677a; color: white;">
                                Editar
                            </a>

                            <!-- Eliminar Proyecto -->
                            <form action="{{ route('proyectos.delete', $proyecto) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn w-100" style="background-color: #4a446d; color: white;">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection