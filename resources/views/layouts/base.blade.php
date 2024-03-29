<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Font awesome -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        
        <!--iconos Materialicons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- JQuery 1.12 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Google icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        
        <!-- css personalizado -->
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <link rel="stylesheet" href="{{asset('css/slider.css') }}">
        <link rel="stylesheet" href="{{asset('css/contacto.css') }}">

        <title>JM SANTANA</title>
    </head>
    <body>
        
        <!-- Contenido web -->
        @yield('contenido')
        <!-- Fin de contenido web -->
         <!-- Menú de navegación -->
        <nav>
            <ul>
            <li><a href="{{ url('/') }}">INICIO</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="{{ url('slider' )}}">WORK</a></li>
            <li><a href="{{ url('contacto') }}">CONTACTO</a></li>
            </ul>
        </nav>
        <!-- Fin del menú de navegación -->
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Javscrippts propios -->
        <script src="{{asset('js/home.js')}}"></script>
        <script src="{{asset('js/slider.js')}}"></script>
    </body>
</html>