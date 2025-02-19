@extends('layouts.plantilla')

@section('title', 'Tareas')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

    <div class="d-flex justify-content-center" style="background-color: #000000; padding: 15px 0;">
        <h3 class="text-white">Tarea {{$tarea->nombre}}</h3>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <p><strong>Proyecto:</strong> {{$proyecto->nombre}}</p>
                <p><strong>Nombre Tarea:</strong> {{$tarea->nombre}}</p>
                <p><strong>Estado:</strong> {{$tarea->estado}}</p>
                <p><strong>Dificultad:</strong> {{$tarea->dificultad}}</p>
                <p><strong>Duración:</strong> {{$tarea->duracion}}</p>

                <a href="{{route('tareas.edit', [$proyecto, $tarea])}}"
                class="btn w-100 mb-2"
                style="background-color: #000000; color: white;">
                Editar
                </a>
            </div>
        </div>
    </div>

@endsection