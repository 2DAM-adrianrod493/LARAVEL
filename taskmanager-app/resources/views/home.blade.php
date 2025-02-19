@extends('layouts.plantilla')

@section('title', 'Home')

@section('contenido')

    <a href="{{route('proyectos.index')}}" class="btn w-100 mb-2" style="background-color: #000000; color: white;" >
        Ver Proyectos
    </a>

@endsection