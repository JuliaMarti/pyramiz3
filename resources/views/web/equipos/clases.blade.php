@extends('layouts.plantilla')

@section('title',strtoupper($categoria->name))

@section('content')


<!--INICIO SECCIÓN NUESTROS PRODUCTOS-->        
<section class="section-equipos-destacados section-plasma-oxicorte">
    <div class="container">
        <div class="row">
            <h3 class="col-12 title-plasma-oxicorte">{{strtoupper($categoria->name)}}</h3>
        </div>

        <div class="row">
            @foreach ($productos as $producto)

                @if ($producto->show)

                    <div class="col-12 col-md-4 productos">
                        <div class="img-border-grey " style="background-image: url({{asset(Storage::url($producto->imagen_principal))}}); ">
                        </div>
                        <p class="nombre-producto" >{{$producto->name}}</p>
                        <p>{{$producto->description}}</p>
                        <a href="{{ route('web.productos.producto',$producto) }}" style="text-decoration: none;">
                            <div class="borde-info ">
                                <p>MÁS INFORMACIÓN</p>
                            </div>
                        </a>
                    </div>
                @endif

            @endforeach
        </div>
    </div>
</section>
<!--FIN SECCIÓN NUESTROS PRODUCTOS--> 

    @if (count($productos) == 3)
    <div class="container">
        <table class="table-plasma-oxicorte" >
            <thead> 
                <tr>
                    <th class="blueBg"></th>
                    <th class="orangeBg">{{$productos[0]->name}}</th>
                    <th class="or1">{{$productos[1]->name}}</th>
                    <th class="or2">{{$productos[2]->name}}</th>
                </tr>
            </thead>
            <tbody> 
                <tr>
                    <th class="a"><h4>Medidas</h4></th>
                    <td class="b"></td>
                    <td class="a"></td>
                    <td class="b"></td>
                </tr>
                <tr>
                    <th class="a">Ancho máximo (útil)</th>
                    <td class="b">{{number_format($productos[0]->ancho_maximo, 0,",", ".")}} mm</td>
                    <td class="a">{{number_format($productos[1]->ancho_maximo, 0,",", ".")}} mm</td>
                    <td class="b">{{number_format($productos[2]->ancho_maximo, 0,",", ".")}} mm</td>
                </tr>
                <tr>
                    <th class="a">Largo máximo (útil)</th>
                    <td class="b">{{number_format($productos[0]->largo_maximo, 0,",", ".")}} mm</td>
                    <td class="a">{{number_format($productos[1]->largo_maximo, 0,",", ".")}} mm</td>
                    <td class="b">{{number_format($productos[2]->largo_maximo, 0,",", ".")}} mm</td>
                </tr>
                <tr>
                    <th class="a"><h4>Equipamiento</h4></th>
                    <td class="b"></td>
                    <td class="a"></td>
                    <td class="b"></td>
                </tr>
                <tr>
                    <th class="a">Plasma HD (XPR / HPR)</th>
                    <td class="b">{{$productos[0]->plasma_HD ? '√' : '-'}} </td>
                    <td class="a">{{$productos[1]->plasma_HD ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->plasma_HD ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Plasma O2 (MaxPro 200)</th>
                    <td class="b">{{$productos[0]->plasma_O2 ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->plasma_O2 ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->plasma_O2 ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Plasma Aire (Powermax)</th>
                    <td class="b">{{$productos[0]->plasma_aire ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->plasma_aire ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->plasma_aire ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Oxicorte</th>
                    <td class="b">{{$productos[0]->oxicorte ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->oxicorte ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->oxicorte ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Marcador plasma</th>
                    <td class="b">{{$productos[0]->marcador_plasma ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->marcador_plasma ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->marcador_plasma ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Marcador neumático</th>
                    <td class="b">{{$productos[0]->marcador_neumatico ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->marcador_neumatico ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->marcador_neumatico ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Control de altura plasma</th>
                    <td class="b">{{$productos[0]->control_altura_plasma}}</td>
                    <td class="a">{{$productos[1]->control_altura_plasma}}</td>
                    <td class="b">{{$productos[2]->control_altura_plasma}}</td>
                </tr>
                <tr>
                    <th class="a">Control de altura oxicorte</th>
                    <td class="b">{{$productos[0]->control_altura_oxicorte}}</td>
                    <td class="a">{{$productos[1]->control_altura_oxicorte}}</td>
                    <td class="b">{{$productos[2]->control_altura_oxicorte}}</td>
                </tr>
                <tr>
                    <th class="a">Cabezal biselador plasma (opcional)</th>
                    <td class="b">{{$productos[0]->cabezal_biselador_plasma}}</td>
                    <td class="a">{{$productos[1]->cabezal_biselador_plasma}}</td>
                    <td class="b">{{$productos[2]->cabezal_biselador_plasma}}</td>
                </tr>
                <tr>
                    <th class="a">Cabezal biselador oxicorte</th>
                    <td class="b">{{$productos[0]->cabezal_biselador_oxicorte}}</td>
                    <td class="a">{{$productos[1]->cabezal_biselador_oxicorte}}</td>
                    <td class="b">{{$productos[2]->cabezal_biselador_oxicorte}}</td>
                </tr>
                <tr>
                    <th class="a"><h4>Componentes</h4></th>
                    <td class="b"></td>
                    <td class="a"></td>
                    <td class="b"></td>
                </tr>
                <tr>
                    <th class="a">Vías de desplazamiento</th>
                    <td class="b">{{$productos[0]->vias_desplazamiento ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->vias_desplazamiento ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->vias_desplazamiento ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Bases de apoyo</th>
                    <td class="b">{{$productos[0]->bases_apoyo ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->bases_apoyo ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->bases_apoyo ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Cremalleras de precisión</th>
                    <td class="b">{{$productos[0]->cremalleras_precision ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->cremalleras_precision ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->cremalleras_precision ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Servo motores (AC)</th>
                    <td class="b">{{$productos[0]->servo_motores ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->servo_motores ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->servo_motores ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Cajas reductoras</th>
                    <td class="b">{{$productos[0]->cajas_reductoras ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->cajas_reductoras ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->cajas_reductoras ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">CNC</th>
                    <td class="b">{{$productos[0]->CNC ? '√' : '-'}}</td>
                    <td class="a">{{$productos[1]->CNC ? '√' : '-'}}</td>
                    <td class="b">{{$productos[2]->CNC ? '√' : '-'}}</td>
                </tr>
                <tr>
                    <th class="a">Panel de operador</th>
                    <td class="b">{{$productos[0]->panel_operador}}</td>
                    <td class="a">{{$productos[1]->panel_operador}}</td>
                    <td class="b">{{$productos[2]->panel_operador}}</td>
                </tr>
                <tr>
                    <th class="a">Pantalla industrial</th>
                    <td class="b">{{$productos[0]->pantalla_industrial}}</td>
                    <td class="a">{{$productos[1]->pantalla_industrial}}</td>
                    <td class="b">{{$productos[2]->pantalla_industrial}}</td>
                </tr>
                <tr>
                    <th class="a">Límites de carrera</th>
                    <td class="b">{{$productos[0]->limites_carrera}}</td>
                    <td class="a">{{$productos[1]->limites_carrera}}</td>
                    <td class="b">{{$productos[2]->limites_carrera}}</td>
                </tr>
            </tbody>
        </table>    
    </div>
    @endif

@endsection