@extends('layouts.plantilla')

@section('title', 'Seguimiento de la Tarea')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

    <div class="d-flex flex-column justify-content-center align-items-center" 
        style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
        <!-- Título -->
        <h3 class="text-white mb-3">Bienvenido al seguimiento de la tarea: {{$tarea->nombre}}</h3>

        <div class="d-flex gap-3 mb-2">
            <!-- Botón Nuevo Seguimiento -->
            <a href="{{ route('seguimientos.create', [$proyecto, $tarea]) }}"
            class="btn mb-2"
            style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
                Nuevo Seguimiento
            </a>
            <!-- Botón Volver Atrás -->
            <a href="{{ route('tareas.index', [$proyecto, $tarea]) }}"
            class="btn mb-2"
            style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
                Volver Atrás
            </a>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <!-- Seguimientos -->
            <div class="col-4">
                <div class="list-group">
                    @foreach ($seguimientos as $seguimiento)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $seguimiento->id }}</h5>
                                    <p class="card-text">{{ $seguimiento->descripcion }}</p>
                                    <p class="card-text">{{ $seguimiento->fecha_inicio }}</p>
                                    <p class="card-text">{{ $seguimiento->fecha_fin }}</p>
                                    <p class="card-text">{{ $seguimiento->usuario }}</p>

                                    <a href="{{route('seguimientos.show', [$proyecto, $tarea, $seguimiento])}}"
                                       class="btn w-100 mb-2"
                                       style="background-color: #666666; color: white;">
                                       Ver Seguimiento
                                    </a>
                                    <form action="{{route('seguimientos.delete', [$proyecto, $tarea, $seguimiento])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn w-100 mb-2"
                                        style="background-color: #000000; color: white;">Eliminar</button>
                                    </form>
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
