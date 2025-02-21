@extends('layouts.plantilla')

@section('title', 'Listado de Proyectos')

@section('buttonBack', route('home'))

@section('buttonBackText', 'Home')

@section('contenido')


<div class="d-flex flex-column justify-content-center align-items-center" 
    style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
    <!-- Título -->
    <h3 class="text-white mb-3">Listado de Proyectos</h3>

    <!-- Botón Nuevo Proyecto -->
    <a href="{{ route('proyectos.create') }}"
    class="btn mb-2"
    style="background-color: #FFFFFF; color: #000000; border-radius: 15px;">
        Nuevo Proyecto
    </a>
</div>

<!-- Lista Proyectos -->
<div class="container mt-5">
    <div class="row">
        @foreach ($proyectos as $proyecto)
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                        <p class="card-text">{{ $proyecto->descripcion }}</p>
                        <div class="mt-auto">
                            <a href="{{route('tareas.index', $proyecto)}}" class="btn w-100 mb-2" style="background-color: #666666; color: white;">
                                Ver Tareas
                            </a>
                            <a href="{{route('proyectos.edit', $proyecto)}}" class="btn w-100 mb-2" style="background-color: #333333; color: white;">
                                Editar
                            </a>
                            <form action={{route('proyectos.delete', $proyecto)}} method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn w-100 mb-2"
                                    style="background-color: #000000; color: white;">Eliminar
                                </button>
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