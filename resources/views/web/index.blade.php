@extends('layouts.plantilla')

@section('title','Pyramiz')

@section('content')

<!--INICIO CAROUSEL-INICIO-->
<div id="carouselExampleIndicators" class="carousel carousel-home slide" data-bs-ride="carousel">
    
    <div class="fondo"></div>

    <div class="carousel-indicators">
    @foreach ($imagenes as $key=>$imagen)    
                <button type="button" data-bs-target="#carouselExampleIndicators" class="{{$loop->first ? 'active' : ''}} btn-carousel" data-bs-slide-to="{{$key}}" {{$loop->first ? 'aria-current="true"' : ''}}  aria-label="Slide {{$key}}"></button>
    @endforeach
    </div>

    <div class="carousel-inner">
            @foreach ($imagenes as $imagen)
                    <div class="carousel-item {{$loop->first ? 'active' : ''}} ">
                        <img class="d-block" src="{{asset(Storage::url($imagen->imagen))}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block carousel-texto">
                            <h2>{{$imagen->titulo}}</h2>
                            <h3>{{$imagen->subtitulo}}</h3>

                            <p>{{$imagen->texto}}</p>
                        </div>
                    </div>
            @endforeach
    </div>
</div>


<!--FIN CAROUSEL-INICIO-->

        @if ($home->seccion_1_show)
            <div class="container home-sections">
                <div class="row">
                    <div class="col-12 col-md-6 home-sec-1">
                        <h2>{!!$home->seccion_1_titulo!!}</h2>
                        <p>{{$home->seccion_1_parrafo}}</p>
                        <hr>
                        <div class="heaer-top-item wsp">
                            <a href="https://api.whatsapp.com/send?phone={{$configuracion->wsp}}" target=”_blank”><i class="fab fa-whatsapp"></i>+{{$configuracion->wsp}}</a>
                            <a href="mailto:{{$configuracion->email}}" target=”_blank”><i class="far fa-envelope"></i> {{$configuracion->email_info}}</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 home-sec-2">
                        <img style="width:22%; padding-bottom:100%;" src="{{asset('img/home/mercado_shops.png')}}" >
                        <h2>{!!$home->seccion_2_titulo!!}</h2>
                        <p>{{$home->seccion_2_parrafo}}</p>
                    </div>
                </div>
            </div>
        @endif 



<!--INICIO SECCIÓN SERVICIOS-->


        <section class="section-home-servicios"> 
            <h3>SERVICIOS</h3>
            <div class="container">
                <div class="row">

                    @foreach ($servicios as $servicio)

                    @if ($servicio->home)

                        <div class="col-12 col-md-6">
                            <div class="img-border-servicios" style="background-image: url({{asset(Storage::url($servicio->imagen))}}); ">
                                
                                <div class="text-box-servicios">
                                    <h4>{{$servicio->titulo}}</h4>
                                    <h5>{{$servicio->subtitulo}}</h5>
                                </div> 
                            </div>


                            <p class="nombre-noticia" >{{$servicio->descripcion}}</p>
                        </div>

                        
                    @endif
                    @endforeach

                </div>
            </div>
        </section>

<!--FIN SECCIÓN SERVICIOS-->



<!--INICIO SECCIÓN NOTICIAS-->

        <section class="section-home-noticias"> 
            <h3>ÚLTIMAS NOTICIAS</h3>
            <div class="container">
                <div class="row">

                     @foreach ($noticias as $noticia)

                    @if ($noticia->home)
                        <div class="col-12 col-md-6 item-noticia">
                            <div>
                                <div class="img-border-noticias" style="background-image: url({{asset(Storage::url($noticia->imagen))}}); ">
                                </div>
                                <h4>{{$noticia->categoria->nombre}}</h4>
                                <h5>{{$noticia->titulo}}</h5>
    
                                <p class="nombre-noticia" >{{$noticia->descripcion}}</p>
                            </div>
                            <button class="btn-noticias">LEER MÁS</button>
                        </div>

                        
                    @endif

                    @endforeach
                </div>
            </div>
        </section>

<!--FIN SECCIÓN NOTICIAS-->


<!--INICIO SECCIÓN REPRESENTANTES-->

        <section class="section-home-representantes"> 
            <h3>REPRESENTANTES OFICIALES</h3>
            <div class="container">

                <?php $cantidadRepresentantes = count($representantes) ?>

                <div id="Cfooter" class="carousel carousel-representantes slide" data-bs-ride="carousel">
                    
                    <div class="carousel-indicators">

                    @foreach ($representantes->chunk(5) as $key=>$chunk)    
                                <button type="button" data-bs-target="#Cfooter" class="{{$loop->first ? 'active' : ''}} btn-carousel d-none d-md-block" data-bs-slide-to="{{$key}}" {{$loop->first ? 'aria-current="true"' : ''}}  aria-label="Slide {{$key}}"></button>
                    @endforeach
                    
                    </div>

                    <div class="carousel-inner">
                            @foreach ($representantes->chunk(5) as $chunk)
                                    <div class="carousel-item {{$loop->first ? 'active' : ''}} ">
                                        <div class="row">

                                                @foreach ($chunk as $representante)

                                                    @if ($representante->show)
                                                    
                                                            <div class="col img-representante"  style="background-image: url({{asset(Storage::url($representante->imagen))}})">

                                                            </div>
                                                                                                    
                                                    @endif

                                                 @endforeach
                                        </div>

                                    </div>
                            @endforeach
                </div>
            </div>
        </section>






<!--FIN SECCIÓN REPRESENTANTES-->





<!--INICIO SECCIÓN EQUIPOS DESTACADOS-->
        {{-- <section class="section-equipos-destacados">
            <div class="container">
                <div class="row">
                    <h3 class="col-12">EQUIPOS DESTACADOS</h3>
                </div>

                <div class="row">

                    @foreach ($productos as $producto)

                    @if ($producto->show && $producto->destacado)
                        <div class="col-12 col-md-4"  >
                            <div class="img-border-grey" style="background-image: url({{asset(Storage::url($producto->imagen_principal))}}); ">
                            </div>
                            <p class="nombre-producto" >{{$producto->name}}</p>
                        </div>
                    @endif

                    @endforeach
                </div>
            </div>
        </section> --}}
<!--FIN SECCIÓN EQUIPOS DESTACADOS-->        


<!--INICIO SECCIÓN LIBELLUA-->
        {{-- @if ($home->seccion_1_show)
            <section class="section-libellula greyBg">
                <div>
                    <h2>{{$home->seccion_1_titulo}}</h2>
                    <p>{!!$home->seccion_1_parrafo!!}</p>
                    <a href="{{ route('web.productos.producto',$home->producto_id) }}" style="text-decoration: none">
                        <div class="borde-info">
                            <p>MÁS INFORMACIÓN</p>
                        </div>
                    </a>    
                </div>
                <img src="{{asset(Storage::url($home->seccion_1_imagen))}}" alt="">
            </section>
        @endif --}}
<!--FIN SECCIÓN LIBELLUA-->


<!--INICIO SECCIÓN NUESTRA MISIÓN-->
        
        {{-- @if ($home->seccion_2_show)
        
            <section class="section-nuestra-mision">
                
                <div class="container">
                    <h3>{{$home->seccion_2_titulo}}</h3>
                    <p>{!!$home->seccion_2_parrafo!!}</p>
                </div>
                
            </section>

        @endif --}}

<!--FIN SECCIÓN NUESTRA MISIÓN-->

        {{-- <hr> --}}


<!--INICIO SECCIÓN KRRASS-->
        {{-- @if ($home->seccion_3_show)
        <section class="section-krrass"  style="background-image: url({{asset(Storage::url($home->seccion_3_imagen_fondo))}});">
            <img src="{{asset(Storage::url($home->seccion_3_imagen))}}" alt="">
            <p>{!!$home->seccion_3_parrafo!!}</p>
            
        </section>
        @endif --}}

<!--FIN SECCIÓN KRRASS-->

<!--INICIO SECCIÓN NUESTROS PRODUCTOS-->        
        {{-- <section class="section-nuestros-productos">
            <div class="container">
                <div class="row">
                    <h3>NUESTROS PRODUCTOS</h3>
                </div>

                <div class="row">
                    @foreach ($categorias as $categoria)

                        @if ($categoria->show)

                            <div class="col-12 col-md-4">
                                <div class="img-border-grey" style="background-image: url({{asset(Storage::url($categoria->imagen))}}); ">
                                </div>
                                <p class="nombre-producto" >{{$categoria->name}}</p>
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </section> --}}
<!--FIN SECCIÓN NUESTROS PRODUCTOS-->        



@endsection