@extends('layouts.plantilla')

@section('title','Empresa')

@section('content')


<!--INICIO CAROUSEL-EMPRESA-->

<div id="Cempresa" class="carousel carousel-empresa slide" data-bs-ride="carousel">
    
    <div class="fondo"></div>

    <div class="carousel-indicators" style="z-index: 999;">
        @foreach ($imagenes as $key=>$imagen)    
                    <button type="button" data-bs-target="#Cempresa" class="{{$loop->first ? 'active' : ''}} btn-carousel" data-bs-slide-to="{{$key}}" {{$loop->first ? 'aria-current="true"' : ''}}  aria-label="Slide {{$key}}"></button>
        @endforeach
    </div>

    <div class="carousel-inner">
            @foreach ($imagenes as $imagen)
                    <div class="carousel-item {{$loop->first ? 'active' : ''}} ">
                        <div class="img" style="background-image: url({{asset(Storage::url($imagen->imagen))}})"></div>
                        <div class="carousel-caption d-none d-md-block carousel-texto">
                            <h2>{{$imagen->titulo}}</h2>
                            <h3>{{$imagen->subtitulo}}</h3>

                            <p>{{$imagen->texto}}</p>
                        </div>
                    </div>
            @endforeach
    </div>
</div>


{{-- <div id="carouselExampleIndicators" class="carousel carousel-empresa slide" data-bs-ride="carousel">
            
    <div class="carousel-indicators">
    @foreach ($imagenes as $key=>$imagen)    
                <button type="button" data-bs-target="#carouselExampleIndicators" class="{{$loop->first ? 'active' : ''}} btn-carousel" data-bs-slide-to="{{$key}}" {{$loop->first ? 'aria-current="true"' : ''}}  aria-label="Slide {{$key}}"></button>
    @endforeach
    </div>

    <div class="carousel-inner">
            @foreach ($imagenes as $imagen)
                    <div class="carousel-item {{$loop->first ? 'active' : ''}} ">
                        <img class="d-block w-100" src="{{asset(Storage::url($imagen->imagen))}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>{!!$imagen->parrafo_1!!}</h1>
                            <p>{!!$imagen->parrafo_2!!}</p>
                        </div>
                    </div>
            @endforeach
    </div>
</div> --}}
<!--FIN CAROUSEL-EMPRESA-->

            <section class="section-empresa">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            {!!$empresa->parrafo_izquierda!!}
                            
                        </div>
                        <div class="col">
                            {!!$empresa->parrafo_derecha!!}
                        </div>
                    </div>
                </div>
            </section>

            <div class="section-empresa-imagen">
                <div style="width:48.4%; background-image: url( {{ asset(Storage::url($empresa->imagen)) }} ); height: 400px; background-repeat: no-repeat;background-size: cover;"></div>
                <div class="imagen-text" style="width:51.6%; background-color: rgba(112,112,112,0.08);">
                    {{$empresa->parrafo_imagen}}
                </div>
            </div>

@endsection


            