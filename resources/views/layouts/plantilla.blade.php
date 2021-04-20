<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    

    <!-- Bootstrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


{{-- RECAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>

    <body>
<!--INICIO HEADER-->
        <header>
                <div class="blackBg header-top">
                    <div class="container" style="display: flex; justify-content: space-between;">
                            <div class="fondo"></div>
                            <div>
                                <div class="header-top-box">
                                    <div class="heaer-top-item wsp">
                                        <a href="https://api.whatsapp.com/send?phone={{$configuracion->wsp}}" {{$configuracion->wsp ? 'target=”_blank”' : ''}}><i class="fab fa-whatsapp"></i>+{{$configuracion->wsp}}</a>
                                    </div>
        
                                    <div class="header-top-item">
                                        <a href="{{$configuracion->linkedin}}" {{$configuracion->linkedin ? 'target=”_blank”' : ''}}><i class="fab fa-linkedin-in"></i></a>
                                    </div>                
                                    <div class="header-top-item">
                                        <a href="{{$configuracion->instagram}}" {{$configuracion->instagram ? 'target=”_blank”' : ''}}><i class="fab fa-instagram"></i></a>
                                    </div>
        
                                    <div class="header-top-item">
                                        <a href="{{$configuracion->facebook}}" {{$configuracion->facebook ? 'target=”_blank”' : ''}}><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <nav>
                    <div class="container" style="display: flex; justify-content: space-between;">
                            <a href="{{ route('web.home') }}" class="col-3">
                                <img src="{{asset(Storage::url($home->logo))}}"  alt="Pyramiz">
                            </a>
                            <ul class="nav">
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'home' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.home') }}">INICIO</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'empresa' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.empresa') }}">EMPRESA</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'equipos' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.equipos.equipos') }}">EQUIPOS</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'productos' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.productos.productos') }}">PRODUCTOS</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'servicios' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.servicios',1) }}">POST VENTA</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'ofertas' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.ofertas') }}">OFERTAS</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'blogs' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.blogs','todas') }}">BLOG</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'contacto' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.contacto',$direccionesFooter->first->id) }}">CONTACTO</a>
                                </li>
                            </ul>
                    </div>
                </nav>  

















                
                {{-- <nav>
                    <div class="container">
                        <div class="row nav-row">
                            <a href="{{ route('web.home') }}" class="col-3">
                                <img src="{{asset(Storage::url($home->logo))}}"  alt="Pantógrafos CAM CNC">
                            </a>
                            <ul class="nav col-9">
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'empresa' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.empresa') }}">EMPRESA</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'productos' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.productos') }}">PRODUCTOS</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'descargas' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.descargas',1) }}">DESCARGAS</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'clientes' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.clientes') }}">CLIENTES</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'videos' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.videos') }}">VIDEOS</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'preguntas frecuentes' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.preguntas_frecuentes') }}">PREGUNTAS FRECUENTES</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'solicitud de presupuesto' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.solicitud_de_presupuesto') }}">SOLICITUD DE PRESUPESTO</a>
                                </li>
                                <li class="nav-item {{$breadcrumb[0]['title'] == 'contacto' ? 'nav-item-active' : '' }}">
                                    <a class="nav-link" href="{{ route('web.contacto',$direcciones->first->id) }}">CONTACTO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>            --}}
        </header>

        @if ($breadcrumb[0]['title'] !='home' && $breadcrumb[0]['title'] !='empresa' )
            <div class="header-bottom">
                <div class="fondo"></div>
                <div class="container header-bottom-cont">
                    <div class="header-bottom-text">
                        <h2>gdsad</h2>
                        <h3>sadas</h3>
                    </div>
                    <div class="header-breadcrumb">
                        <a href="{{ route('web.home') }}">INICIO</a>
                        @foreach ($breadcrumb as $key=> $bread)

                            <a class="{{$key == (count($breadcrumb)-1) ? 'active-link' : ''}} " href="{{ route($bread['link'],$bread['cat'] ? $bread['cat'] : '' ) }}">{{$bread['title']}}</a>

                         @endforeach
                    </div>
                </div>
            </div>
        @endif
<!--FIN HEADER-->
    
        <main>

            @yield('content')

        </main>

<!--INICIO FOOTER-->        

        <footer>
            <div class="footer-top orangeBg">
                <div style="width: 75px;"></div>
                <a href="{{$configuracion->linkedin}}" {{$configuracion->linkedin ? 'target=”_blank”' : ''}} ><div class="icon-border"><i class="fab fa-linkedin-in"></i></div></a>
                <a href="{{$configuracion->instagram}}" {{$configuracion->instagram ? 'target=”_blank”' : ''}}  ><div class="icon-border"><i class="fab fa-instagram"></i></div></a>
                <a href="{{$configuracion->facebook}}" {{$configuracion->facebook ? 'target=”_blank”' : ''}}  ><div class="icon-border"><i class="fab fa-facebook-f"></i></div></a>
                <a href="https://api.whatsapp.com/send?phone={{$configuracion->wsp}}"  {{$configuracion->wsp ? 'target=”_blank”' : ''}} ><div class="border-wsp"> <i class="fab fa-whatsapp"> </i></div> </a>
            </div>

            <div class="footer-info">
                <div class="container footer-box">
                    <div class="row">

                        <div class="col-3 d-none d-sm-none d-md-block" >
                            <img src="{{asset(Storage::url($home->logo_footer))}}">

                        </div>

                        <div class="col d-none d-sm-none d-md-block" >
                            <h5>SECCIONES</h5>
                            <p><a href="{{ route('web.empresa') }}" >EMPRESA</a></p>
                            <p><a href="{{ route('web.equipos.equipos') }}" >EQUIPOS</a></p>
                            <p><a href="{{ route('web.productos.productos') }}" >PRODUCTOS</a></p>

                        </div>

                        <div class="col d-none d-sm-none d-md-block" style="padding-top:37px;">
                            <p><a href="{{ route('web.servicios') }}" >POST VENTA</a></p>

                            <p><a href="{{ route('web.ofertas') }}" >OFERTAS</a></p>
                            <p><a href="{{ route('web.contacto',$direccionesFooter->first->id) }}" >CONTACTO</a></p>
                            
                        </div>

                        @foreach ($direccionesFooter as $itemDireccion)
                        <div class="col-3 p-0 d-none d-sm-none d-md-block">
                            <h5>{{$itemDireccion->nombre}}</h5>
                    
                            <div class="item-contact" style="margin-bottom: 18px;">
                                <i class="fas fa-map-marker-alt"></i>
                                <a>{{$itemDireccion->direccion}}</a>
                                <p></p>
                            </div>
                            
                            <div class="item-contact" style="margin-bottom: 18px;">
                                    <i class="far fa-envelope"></i> 
                                    <a href="mailto:{{$itemDireccion->email}}" target=”_blank”>{{$itemDireccion->email}}</a>
                            </div>
                                
                            <div class="item-contact" style="margin-bottom: 18px;">
                                <i class="fas fa-phone-alt"></i>
                                <div style="margin-bottom:16px;">{!!$itemDireccion->telefonos!!}</div>
                            </div>

                        </div>
                        @endforeach
                  
                    </div>
                </div>             
            </div>

            <div class=" footer-bottom darkBlackBg">
                <div class="container">
                    <p>© Copyright 2021 Pyramiz. Todos los derechos reservados</p>
                </div>
            </div>
        </footer>








{{-- 
        <footer>
            <div class="footer-top orangeBg">
                <a href="{{$configuracion->instagram}}" target=”_blank” ><div class="icon-border"><i class="fab fa-instagram"></i></div></a>
                <a href="{{$configuracion->facebook}}" target=”_blank” ><div class="icon-border"><i class="fab fa-facebook-f"></i></div></a>
                <a href="{{$configuracion->youtube}}" target=”_blank” ><div class="icon-border"><i class="fab fa-youtube"></i></div></a>
            </div>

            <div class="footer-info blueBg">
                <div class="container footer-box">
                    <div class="row">
                        <div class="col d-none d-sm-none d-md-block" >
                            <h5>SECCIONES</h5>
                            <p><a href="{{ route('web.empresa') }}" >EMPRESA</a></p>
                            <p><a href="{{ route('web.productos') }}" >PRODUCTOS</a></p>
                            <p><a href="{{ route('web.clientes') }}" >CLIENTES</a></p>
                        </div>

                        <div class="col d-none d-sm-none d-md-block" style="padding-top:37px;">
                            <p><a href="{{ route('web.preguntas_frecuentes') }}" >PREGUNTAS FRECUENTES</a></p>
                            <p><a href="{{ route('web.solicitud_de_presupuesto') }}" >SOLICITUD DE PRESUPUESTO</a></p>
                            <p><a href="{{ route('web.contacto',$direcciones->first->id) }}" >CONTACTO</a></p>
                        </div>

                        <div class="col-3 p-0 d-none d-sm-none d-md-block">
                            <h5>SUSCRIBITE AL NEWSLETTER</h5>
                            
                            <form method="POST" active="{{route('web.email')}}" >
                                @csrf
                                <div class="input-box">
                                        <input type="text" placeholder="Ingresa tu email" name="email" id="nombreParaVincular" style="width:70%">
                                        <button type="submit" class="orangeBg"> <i class="fas fa-caret-right"></i> </button>
                                
                                </div>
                            </form>    

                        </div>

                        <div class="col-4 col-contact" style="line-height: 20px;">  
                            <h5>CONTACTANOS</h5>  
                            <div class="item-contact">
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="https://g.page/camcnc?share" target=”_blank”>{{$configuracion->direccion}}</a>
                                <p></p>
                            </div>
                            
                            <div class="item-contact">
                                    <i class="far fa-envelope"></i> 
                                    <a href="mailto:{{$configuracion->email}}" target=”_blank”>{{$configuracion->email}}</a>
                            </div>
                                
                            <div class="item-contact">
                                <!-- Icono en SVG porque no estaba disponible en Font Awesome -->
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="349.325px" height="349.324px" viewBox="0 0 349.325 349.324" style="enable-background:new 0 0 349.325 349.324;"xml:space="preserve">
                                    <g>
                                        <path d="M18.451,33.056C-8.6,73.651-6.972,151.824,42.83,207.313c46.215,51.491,115.158,108.634,115.735,109.101
                                            c1.478,1.341,36.774,32.91,88.89,32.91c5.043,0,10.161-0.31,15.214-0.919c56.533-6.83,77.256-43.071,84.579-64.059
                                            c3.782-10.801-2.585-24.196-13.914-29.254L266.985,225.6c-3.184-1.411-6.992-2.158-11.015-2.158c-8.2,0-16.432,3.042-21.47,7.937
                                            l-20.911,20.262c-3.107,3.011-8.627,5.032-13.746,5.032c-2.188,0-4.118-0.386-5.57-1.122c-14.116-7.079-36.3-21.211-61.857-48.307
                                            c-22.681-24.07-33.456-40.568-38.506-50.173c-2.821-5.373,0.127-14.678,4.552-19.096l18.603-18.596
                                            c7.734-7.734,11.217-21.962,7.924-32.39L104.07,20.556C100.887,10.453,90.149,0,77.629,0C60.288,0.584,35.942,6.795,18.451,33.056
                                            z M78.292,11.842c5.979,0.025,12.688,6.614,14.472,12.279l20.921,66.43c1.976,6.249-0.366,15.8-5.001,20.444l-18.606,18.59
                                            c-7.599,7.6-12.093,22.673-6.66,32.989c5.39,10.248,16.765,27.729,40.37,52.783c26.743,28.351,50.196,43.259,65.158,50.77
                                            c3.067,1.544,6.846,2.356,10.903,2.356c8.231,0,16.655-3.199,21.978-8.358l20.91-20.256c4.164-4.037,14.062-5.825,19.419-3.453
                                            l66.354,29.492c5.058,2.25,9.45,9.075,7.551,14.508c-6.413,18.393-24.663,50.15-74.804,56.214
                                            c-4.58,0.553-9.221,0.827-13.802,0.827c-46.996,0-79.704-28.741-81.133-30.011c-0.67-0.554-69.292-57.498-114.676-108.06
                                            C7.081,149.737,3.598,76.686,28.302,39.619C43.002,17.562,63.591,12.34,78.292,11.842z"/>
                                    </g>
                                </svg>
                                <a href="tel:{{$configuracion->tel_celular}}" target=”_blank”>{{$configuracion->tel_celular}}</a>
                            </div>

                            <div class="item-contact">
                                <i class="fab fa-whatsapp"></i>
                                <a href="https://api.whatsapp.com/send?phone={{$configuracion->wsp}}" target=”_blank”>+{{$configuracion->wsp}}</a>
                            </div>
                        </div>                    
                    </div>
                </div>             
            </div>

            <div class=" footer-bottom darkBlueBg">
                <div class="container">
                    <p>@Copyright 2021 Pantografos CAM CNC. Todos los derechos reservados</p>
                </div>
            </div>
        </footer> --}}
<!--FIN FOOTER-->    
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>
