@extends('layouts.plantilla')

@section('title', 'Editar Tareas')

@section('contenido')

<div class="d-flex justify-content-center" style="background-color: #000000; padding: 15px 0; border-radius: 15px;">
    <h3 class="text-white">Tarea {{$tarea->nombre}}</h3>
</div>

<form action="{{route('tareas.update', [$proyecto, $tarea])}}" method="post">

    @csrf
    @method('put')

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la Tarea</label>
        <input type="text"
                name="nombre"
                class="form-control"
                id="nombre" value="{{old('nombre', $tarea->nombre)}}" required>
    </div>

    @error('nombre')
        <span class="text-danger">*{{$message}}</span>
    @enderror

    <div class="mb-3">
        <label for="controlInputDescp" class="form-label">Dificultad</label>
        <textarea class="form-control" id="controlInputDescp" rows="3"
        name="dificultad">{{$tarea->dificultad}}</textarea>
    </div>
    <div class="mb-3">
        <label for="controlInputEstado" class="form-label">Estado</label>
        <select class="form-control" id="controlInputEstado" name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="en_progreso">En progreso</option>
            <option value="completada">Completada</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="controlInputDuracion" class="form-label">Duración</label>
        <input type="number" class="form-control" id="controlInputDuracion" name="duracion"
        value="{{$tarea->duracion}}">
    </div>
    
    <button type="submit" class="btn" style="background-color: #222222; color: white;">Guardar</button>
    <a href="{{ route('tareas.index', $proyecto) }}"
        class="btn" style="background-color: #000000; color: white;">Cancelar</a>

</form>

@endsection