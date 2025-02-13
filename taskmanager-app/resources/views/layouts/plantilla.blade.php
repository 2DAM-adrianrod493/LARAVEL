<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo', 'TaskManager')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <link href="../../css/plantilla.css" rel="stylesheet" type="text/css" />
        
    </head>

    <body>
        <div class="content-wrapper">

            <header class="row py-4 m-0 head align-items-center">
                <div class="col-6 d-flex align-items-center">
                    <img src="{{ asset('storage/images/logo.png') }}" class="img-fluid logo me-2">
                    <p class="display-6 m-0">TaskManager</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-home">Home</a>
                </div>
            </header>

            <div class="container mt-4 flex-grow-1">
                @yield('contenido')
            </div>

            <footer class="text-light text-center py-3 mt-4">
                <p>Realizado por Adrián Rodríguez</p>
            </footer>

        </div>
    </body>
</html>