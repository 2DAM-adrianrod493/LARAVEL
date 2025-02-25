<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo', 'TaskManager')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
        <style>
            .logo {
                max-width: 60px;
                height: auto;
            }

            #footer {
                position:fixed;
                left:0px;
                bottom:0px;
                height:60px;
                width:100%;
                background:#000000;
            }
        </style>
    </head>

    <body class="d-flex flex-column min-vh-100">
        <div class="content-wrapper flex-grow-1">

            <header class="row py-4 m-0 head align-items-center">
                <div class="col-6 d-flex align-items-center">
                    <img src="{{ url('storage/images/logo.png') }}" class="img-fluid logo me-2">
                    <p class="display-6 m-0" style="font-weight: bold;">TaskManager</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn mb-2" style="background-color: #000000; color: white;">Home</a>
                </div>
            </header>

            <div class="container mt-4 flex-grow-1">
                @yield('contenido')
            </div>

            <div id="footer" class="text-light text-center py-3 mt-4">
                Realizado Por Adrián Rodríguez
            </div>

        </div>
    </body>
</html>