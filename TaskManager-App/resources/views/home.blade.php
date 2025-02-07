<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gestor de Tareas</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">

        <!-- Estilos -->
        <style>
            h1, h2, p, li {
                font-family: 'Oswald', sans-serif;
            }
            body {
                background-color: #4a446d;
            }
        </style>
    </head>

    <body>
        <div class="container py-5">

            <section class="my-5 card p-4" style="background-color: #f8f9fa; border-radius: 10px;">
                <div class="text-center">
                    <h1 class="mb-4">Task Manager</h1>
                    <a href="{{ route('proyectos.index') }}" class="btn" style="background-color: #4a446d; color: white;">
                        Ver Proyectos
                    </a>
                </div>
            </section>
        
            <section class="my-5">
                <h2 class="text-center mb-4" style="color: #FFFFFF">Lista de Proyectos</h2>
                
                @if (count($proyectos) > 0)
                    <ul class="list-group">
                        @foreach ($proyectos as $proyecto)
                            <li class="list-group-item">
                                <strong>{{ $proyecto->nombre }}</strong><br>
                                <span>{{ $proyecto->descripcion }}</span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-center" style="color: #FFFFFF">Sin Proyectos</p>
                @endif
                
            </section>
        </div>
    </body>
</html>