@extends('layouts.plantilla')

@section('title','Post Venta')

@section('content')


<!--INICIO POST VENTA-->


            <section class="section-post-venta">
                @foreach ($servicios->chunk(2) as $chunk)

                <div class="post-venta-item" style="width: 100%">
                    <div class="imagen" style="width:50%; background-image: url( {{ asset(Storage::url($chunk->first->imagen->imagen)) }} ); "></div>
                    <div class="imagen-text" style="width:50%;">
                        
                        <div class="text-display" >
                            <h4>{{$chunk->first->titulo->titulo}}</h4>
                            <h5>{{$chunk->first->subtitulo->subtitulo}}</h5>
                            
                            <p>{{$chunk->first->descripcion->descripcion}}</p>
                        </div>

                    </div>
                </div>
                <div class="post-venta-item" style="width: 100%">
                    <div class="imagen-text text-black" style="width:50%">
                        
                        <div class="text-display">
                            <h4>{{$chunk->last()->titulo}}</h4>
                            <h5>{{$chunk->last()->subtitulo}}</h5>
                                
                            <p>{{$chunk->last()->descripcion}}</p>

                        </div>

                    </div>

                    <div class="imagen"style="width:50%; background-image: url( {{ asset(Storage::url($chunk->last()->imagen)) }} ); "></div>
                </div>
                @endforeach
            </section>


            <section class="section-post-venta-contacto">
                <div class="container">
                    <h2>Contactá con nosotros</h2>
                    <p>Completa el formulario para que podamos asesorarte sobre nuestros servicios de Post Venta</p>
                    <form method="POST" action="{{route('web.contactanos_post_venta')}}"> 
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <input class="box" name="nombre" placeholder="Ingresar nombre *">
                                <input class="box" name="email" placeholder="Ingrese su correo electrónico *">
                                <input class="box" name="empresa" placeholder="Empresa *">

                                <button type="submit" class="btn-post-venta" style="margin-top:25px;" >
                                    ENVIAR CONSULTA
                                </button>
                            </div>

                            <div class="col-4">
                                <input class="box" name="telefono" placeholder="Número de teléfono*">
                                <div> 
                                    <textarea class="box" name="comentarios" style="padding-top:19px; min-height:100px;">Mensaje</textarea>
                                </div>
                            </div>

                            <div class="col-4">
                                <h4> Seleccione el motivo de su consulta </h4>

                                <div class="form-check" style="margin-bottom: 5px;">
                                    <input class="form-check-input" type="checkbox" name="reparaciones" value="1">
                                    <label class="form-check-label">Reparaciones</label>
                                </div>
                                <div class="form-check" style="margin-bottom: 5px;">
                                    <input class="form-check-input" type="checkbox" name="repuestos_y_accesorios" value="1">
                                    <label class="form-check-label">Repuestos y accesorios</label>
                                </div>
                                <div class="form-check" style="margin-bottom: 5px;">
                                    <input class="form-check-input" type="checkbox" name="pintura" value="1">
                                    <label class="form-check-label">Pintura</label>
                                </div>
                                <div class="form-check" style="margin-bottom: 5px;">
                                    <input class="form-check-input" type="checkbox" name="capacitaciones" value="1">
                                    <label class="form-check-label">Capacitaciones</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
<!--FIN POST VENTA-->
@endsection


            