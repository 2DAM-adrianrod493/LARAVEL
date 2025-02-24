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
            <!-- Botón Volver Atrás -->
            <a href="{{ route('proyectos.index', $proyecto) }}"
            class="btn mb-2"
            style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
                Volver Atrás
            </a>
        </div>
    </div>
    
    <!-- Kanban -->
    <div class="container mt-5">
        <div class="row">
            <!-- Tareas Pendientes -->
            <div class="col-4">
                <h4 class="text-white d-flex flex-column justify-content-center align-items-center mb-3" 
                style="background-color: #000000; padding: 15px 0; border-radius: 15px;">Pendiente</h4>
                <div class="list-group">
                    @foreach ($tareas as $tarea)
                        @if ($tarea->estado == 'pendiente')
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tarea->nombre }}</h5>
                                    <p class="card-text">{{ $tarea->estado }}</p>
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
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Tareas en Progreso -->
            <div class="col-4">
                <h4 class="text-white d-flex flex-column justify-content-center align-items-center mb-3" 
                style="background-color: #000000; padding: 15px 0; border-radius: 15px;">En Progreso</h4>
                <div class="list-group">
                    @foreach ($tareas as $tarea)
                        @if ($tarea->estado == 'en_progreso')
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tarea->nombre }}</h5>
                                    <p class="card-text">{{ $tarea->estado }}</p>
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
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Tareas Completadas -->
            <div class="col-4">
                <h4 class="text-white d-flex flex-column justify-content-center align-items-center mb-3" 
                style="background-color: #000000; padding: 15px 0; border-radius: 15px;">Completada</h4>
                <div class="list-group">
                    @foreach ($tareas as $tarea)
                        @if ($tarea->estado == 'completada')
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tarea->nombre }}</h5>
                                    <p class="card-text">{{ $tarea->estado }}</p>
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
                        @endif
                    @endforeach
                </div>
            </div>
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
