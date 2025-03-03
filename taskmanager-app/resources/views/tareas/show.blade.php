@extends('layouts.plantilla')

@section('title', 'Tareas' . $tarea)

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

    <div class="d-flex flex-column justify-content-center align-items-center" 
        style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
        <!-- Título -->
        <h3 class="text-white mb-3">Tarea {{$tarea->nombre}}</h3>

        <!-- Botón Nueva Tarea -->
        <a href="{{ route('tareas.index', $proyecto) }}"
        class="btn mb-2"
        style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
            Volver Atrás
        </a>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <p><strong>Proyecto:</strong> {{$proyecto->nombre}}</p>
                <p><strong>Nombre Tarea:</strong> {{$tarea->nombre}}</p>
                <p><strong>Estado:</strong> {{$tarea->estado}}</p>
                <p><strong>Dificultad:</strong> {{$tarea->dificultad}}</p>
                <p><strong>Duración:</strong> {{$tarea->duracion}}</p>

                <a href="{{route('seguimientos.index', [$proyecto, $tarea])}}"
                class="btn w-100 mb-2"
                style="background-color: #000000; color: white;">
                Detalles
                </a>

                <a href="{{route('tareas.edit', [$proyecto, $tarea])}}"
                class="btn w-100 mb-2"
                style="background-color: #000000; color: white;">
                Editar
                </a>

                <form action="{{route('tareas.delete', [$proyecto, $tarea])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn w-100 mb-2"
                    style="background-color: #000000; color: white;">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

@endsection