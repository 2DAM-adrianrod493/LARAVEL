@extends('layouts.plantilla')

@section('title', 'Home')

@section('contenido')

    <div class="d-flex flex-column justify-content-center align-items-center" 
        style="background-color: #000000; padding: 15px 0; border-radius: 15px; height: 130px">

        <!-- Botón Nuevo Proyecto -->
        <a href="{{ route('proyectos.index') }}"
        class="btn mb-2"
        style="background-color: #FFFFFF; color: #000000; border-radius: 15px; font-size: 1.5rem;">
            Ver Proyectos
        </a>
</div>

@endsection
