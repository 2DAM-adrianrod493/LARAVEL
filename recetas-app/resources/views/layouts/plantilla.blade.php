<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .logo{
             width: 4rem;
             height: 4rem;
         }        
     </style>
</head>

<body>
    <header class="row py-4 bg-secondary m-0">
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-start">
                <img src="{{ asset('storage/images/logo.png') }}" class="img-fluid logo me-2" alt="Logo IES">
            <p class="display-6 text-light">Recetario App</p>
            </div>
           
        </div>
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-end">
                <a href="@yield('buttonBack')" class="btn btn-dark">
                    @yield('buttonBackText')
                </a></div>          
        </div>
    </header>
    <!-- Menú Nav -->

    <!-- Contenido -->
    @yield('contenido')

    <!-- Footer -->
   

</body>
</html>
