<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo', 'TaskManager')</title>

        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            /* Fuente Letra */
            body {
                font-family: 'Oswald', sans-serif;
            }

            .head {
                background-color: #4a446d;
            }

            .navbar .navbar-brand, .navbar-nav .nav-link {
                color: white !important;
            }

            .logo {
                width: 4rem;
                height: 4rem;
            }

            .head .display-6, .navbar-brand {
                font-weight: 600;
                color: white;
            }

            /* Footer */
            footer {
                background-color: #4a446d;
            }

            /* Botón Home */
            .btn-home {
                background-color: #ab677a;
                color: white;
            }

        </style>

    </head>

    <body>
        <div class="content-wrapper">

            <!-- Header -->
            <header class="row py-4 m-0 head align-items-center">
                <div class="col-6 d-flex align-items-center">
                    <img src="{{ asset('storage/images/taskManagerLogo.png') }}" class="img-fluid logo me-2">
                    <p class="display-6 m-0">TaskManager</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-home">Home</a>
                </div>
            </header>

            <!-- Contenido -->
            <div class="container mt-4 flex-grow-1">
                @yield('contenido')
            </div>

            <!-- Footer -->
            <footer class="text-light text-center py-3 mt-4">
                <p>TaskManager. Realizado por Adrián Rodríguez</p>
            </footer>

        </div>
    </body>
</html>
