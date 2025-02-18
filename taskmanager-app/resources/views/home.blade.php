@extends('layouts.plantilla')

@section('title', 'Home')

@section('contenido')

    <a href="{{route('proyectos.index')}}" class="btn btn-outline-success">
        Ver Proyectos
    </a>

@endsection