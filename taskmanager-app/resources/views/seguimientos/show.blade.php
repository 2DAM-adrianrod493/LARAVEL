@extends('layouts.plantilla')

@section('title', 'Seguimientos' . $seguimiento)

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')

    <div class="d-flex flex-column justify-content-center align-items-center" 
        style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
        <!-- Título -->
        <h3 class="text-white mb-3">Seguimiento {{$seguimiento->id}}</h3>

        <!-- Botón Volver Atrás -->
        <a href="{{ route('seguimientos.index', $proyecto, $tarea) }}"
        class="btn mb-2"
        style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
            Volver Atrás
        </a>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{$seguimiento->id}}</p>
                <p><strong>Fecha Inicio:</strong> {{$seguimiento->fecha_inicio}}</p>
                <p><strong>Fecha Fin:</strong> {{$seguimiento->fecha_fin}}</p>
                <p><strong>Descripción:</strong> {{$seguimiento->descripcion}}</p>
                <p><strong>Usuario:</strong> {{$seguimiento->usuario}}</p>

                <form action="{{route('seguimientos.delete', [$proyecto, $tarea, $seguimiento])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn w-100 mb-2"
                    style="background-color: #000000; color: white;">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

@endsection