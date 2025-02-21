@extends('layouts.plantilla')

@section('title', 'Listado de Tareas')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

    <div class="d-flex flex-column justify-content-center align-items-center" 
        style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
        <!-- Título -->
        <h3 class="text-white mb-3">Listado de Tareas</h3>

        <div class="d-flex gap-3 mb-2">
            <!-- Botón Nueva Tarea -->
            <a href="{{ route('tareas.create', $proyecto) }}"
            class="btn mb-2"
            style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
                Nueva Tarea
            </a>
                <!-- Botón Nueva Tarea -->
                <a href="{{ route('proyectos.index', $proyecto) }}"
                class="btn mb-2"
                style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
                Volver Atrás
            </a>
        </div>
    </div>
    
    <!-- Lista Tareas -->
    <div class="container mt-5">
        <div class="row">
            @foreach ($tareas as $tarea)
                <div class="col-4  mb-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $tarea->nombre }}</h5>
                            <p class="card-text">{{ $tarea->estado }}</p>
                            <div class="mt-auto">
                                <a href="{{route('tareas.show', [$proyecto, $tarea])}}"
                                    class="btn w-100 mb-2"
                                    style="background-color: #666666; color: white;">
                                    Ver Tarea
                                </a>
                                
                                <a href="{{route('tareas.edit', [$proyecto, $tarea])}}"
                                class="btn w-100 mb-2"
                                style="background-color: #333333; color: white;">
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
                </div>
            @endforeach
        </div>
    </div>
    
    <p></p>
    
    @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

@endsection