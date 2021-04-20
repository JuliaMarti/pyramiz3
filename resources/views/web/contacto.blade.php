@extends('layouts.plantilla')

@section('title','Contacto')

@section('content')








<section class="section-direcciones">
    <div class="container">
        <div class="row" style="display: flex">
            <div class="accordion accordion-flush col-4" id="accordionFlushExample">
                @foreach ($direcciones as $i => $direccionItem)
                    @if ($direccionItem->show)

                        <div class="accordion-item">
                            <h3 class="accordion-header " id="flush-heading{{$i}}">

                                <a href="{{route('web.contacto', $direccionItem->id)}}" style="text-decoration: none;">
                                    <button class="accordion-button {{$direccion->id == $direccionItem->id ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$i}}" aria-expanded="{{$loop->first ? 'true' : 'false' }}" aria-controls="flush-collapse{{$i}}">
                                        {{$direccionItem->nombre}}
                                    </button>
                                </a>

                            </h3>
                            <div id="flush-collapse{{$i}}" class="accordion-collapse collapse {{$direccion->id == $direccionItem->id ? 'show' : '' }}" aria-labelledby="flush-heading{{$i}}" data-bs-parent="#accordionFlushExample">
                                
                                
                                <div class="accordion-body" >
                                    <div class="accordeon-body-item">
                                        <i class="fas fa-map-marker-alt"></i><p>{{$direccionItem->direccion}}</p>
                                    </div>
                                    <div class="accordeon-body-item">
                                        <i class="fas fa-phone-alt"></i><div style="margin-bottom:16px;">{!!$direccionItem->telefonos!!}</div>
                                    </div>
                                     @if ($direccionItem->email)
                                         
                                        <div class="accordeon-body-item">
                                            <i class="far fa-envelope" style="margin-top: 4px;"></i><p>{{$direccionItem->email}}</p>
                                        </div>
                                     @endif

                                </div>
                            
                            
                            </div>
                        </div>
    
                    @endif
                @endforeach
            </div>
    
            <div class="col-8">{!!$direccion->map!!}</div>
    
        </div>
    </div>

</section>


<section class="section-contacto">
    <div class="container">
        
        <h2>Completa el formulario</h2>
        <p>Contanos en qué podemos ayudarte</p>

        <form method="POST" action="{{route('web.contactanos',$direcciones->first->id)}}"> 
            @csrf
            <div class="row">
        
                <div class="col-6">
                    <input class="box" name="nombre" placeholder="Ingresar nombre *">
                    <input class="box" name="telefono" placeholder="Ingrese tu teléfono *">
                    <input class="box" name="mensaje" placeholder="Mensaje">
                </div>
        
                <div class="col-6">
                    <input class="box" name="email" placeholder="Ingrese su correo electrónico *">
                    <input class="box" name="empresa" placeholder="Empresa">
                    <button type="submit" class="btn-contacto" >
                        ENVIAR CONSULTA
                    </button>
                </div>
                
            </div>
        </form>   
        
        @if (session('info'))
            <script>
                alert("{{ session('info') }}");
            </script>
        @endif
    </div>

</section>

@endsection