<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!--Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

</head>
<body>
    <div id="app">
        <header class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" >

                    
                    <h2 >@yield('title')</h2>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </header> 


        <header>

        </header>

        <nav>
                        
            <div style="background-color:white; "> <img src="{{ asset('img/home/logo.png')}}" class="p-4"> </div>
            @guest

            @else
                
                <a href="{{ route('homes.index') }}"><i class="fas fa-home"></i>  {{ __('Home') }}</a>

                <a href="{{ route('empresas.index') }}"><i class="fas fa-city"></i>  {{ __('Empresa') }}</a>


                <li class="nav-item dropdown" style="height: 49px; position: relative;" >
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="position: absolute; top: 0;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-box"></i> Equipos
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('clases.index') }}"><i class="far fa-bookmark"></i>  {{ __('Clases') }}</a>
                        <a class="dropdown-item" href="{{ route('equipos.index') }}"><i class="fas fa-box"></i>  {{ __('Equipos') }}</a>
                        <a class="dropdown-item" href="{{ route('alturas.index') }}"><i class="fas fa-box"></i>  {{ __('Alturas de Trabajo') }}</a>
                        <a class="dropdown-item" href="{{ route('combustiones.index') }}"><i class="fas fa-box"></i>  {{ __('Tipos de combustión') }}</a>

                    </div>
                </li>

                <a href="{{ route('servicios.index') }}"><i class="far fa-lightbulb"></i>  {{ __('Post Venta') }}</a>

                <a href="{{ route('descargas.index') }}"><i class="fas fa-download"></i>  {{ __('Descargas') }}</a>

                <a href="{{ route('representantes.index') }}"><i class="fas fa-user-friends"></i>  {{ __('Representantes') }}</a>
                


                <li class="nav-item dropdown" style="height: 49px; position: relative;" >
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="position: absolute; top: 0;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-box"></i> Blog
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('noticias.index') }}"><i class="fab fa-youtube"></i>  {{ __('Noticias') }}</a>

                        <a class="dropdown-item" href="{{ route('claseblogs.index') }}"><i class="fas fa-box"></i>  {{ __('Categorías') }}</a>

                    </div>
                </li>

                
                <a href="{{ route('preguntas.index') }}"><i class="far fa-question-circle"></i>  {{ __('Preguntas') }}</a>

                <a  href="{{ route('imagenes.index') }}"><i class="fas fa-images"></i>  {{ __('Imágenes Sliders') }}</a>

                <a  href="{{ route('direcciones.index') }}"><i class="fas fa-images"></i>  {{ __('Direcciones') }}</a>

                <a href="{{ route('configuraciones.index') }}"><i class="fas fa-cog"></i>  {{ __('Configuración') }}</a>

            @endguest

        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
</body>
</html>
