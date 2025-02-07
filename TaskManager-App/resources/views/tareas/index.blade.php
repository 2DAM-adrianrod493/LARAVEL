@extends('layouts.plantilla')

@section('title', 'Tareas del Proyecto: ' . $proyecto->nombre)

@section('buttonBack', route('proyectos.index'))
@section('buttonBackText', 'Volver a Proyectos')

@section('contenido')

    <!-- Título -->
    <div class="d-flex justify-content-center bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
        <h3 class="text-white">Tareas del Proyecto: {{ $proyecto->nombre }}</h3>
    </div>

    <div class="d-flex justify-content-center gap-3 bg-opacity-25" style="background-color: #4a446d; padding: 20px 0;">
        <!-- Botón Volver a Proyectos -->
        <a href="{{ route('proyectos.index', $proyecto) }}" class="btn" style="background-color: white; color: #4a446d;">
            Volver a Proyectos
        </a>
        <!-- Botón Nueva Tarea -->
        <a href="{{ route('proyectos.tareas.create', $proyecto) }}" class="btn" style="background-color: white; color: #4a446d;">
            Nueva Tarea
        </a>
    </div>

    <!-- Mensaje de Éxito -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Listado de Tareas -->
    <div class="container mt-5">
        <div class="row">
            @foreach ($tareas as $tarea)
                <div class="col-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $tarea->nombre }}</h5>
                            <p class="card-text">Estado: {{ ucfirst($tarea->estado) }}</p>
                            <p class="card-text">Duración: {{ $tarea->duracion }} h</p>

                            <!-- Botones -->
                            <div class="mt-auto">
                                <!-- Ver Tarea -->
                                <a href="{{ route('proyectos.tareas.show', [$proyecto, $tarea]) }}" class="btn w-100 mb-2" style="background-color: #d086a0; color: white;">
                                    Ver
                                </a>

                                <!-- Editar Tarea -->
                                <a href="{{ route('proyectos.tareas.edit', [$proyecto, $tarea]) }}" class="btn w-100 mb-2" style="background-color: #ab677a; color: white;">
                                    Editar
                                </a>

                                <!-- Eliminar Tarea -->
                                <form action="{{ route('proyectos.tareas.delete', [$proyecto, $tarea]) }}" method="post">
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
