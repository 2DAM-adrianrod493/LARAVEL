@extends('layouts.plantilla')


@section('title', 'Crea una nueva categoría')




@section('buttonBack', route('categorias.index'))
@section('buttonBackText', 'Categorías')


<!--Como nuestro contenido ocupa más que
    un texto abrimos y cerramos la sección-->
@section('contenido')

    <div class="d-flex justify-content-center bg-success p-2 text-dark bg-opacity-25">
        <h3>Crea una nueva categoría</h3>
    </div>

    <!--FORMULARIO PARA CREAR UNA NUEVA CATEGORÍA-->
    <form class="container mt-2" action={{route('categorias.store')}} method="post">
        @csrf
        <div class="mb-3">
            <label for="controlInputNombre" class="form-label">Nombre de la categoría</label>
            <input type="text" class="form-control" id="controlInputNombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="controlInputDescp" class="form-label">Descripción de la categoría</label>
            <textarea class="form-control" id="controlInputDescp" rows="3" name="descripcion"></textarea>
        </div>  
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{route('categorias.index')}}" class="btn btn-danger">Cancelar</button>
    </form>

@endsection