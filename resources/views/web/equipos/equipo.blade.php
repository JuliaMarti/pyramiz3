@extends('layouts.plantilla')

@section('title',strtoupper($producto->name))

@section('content')

<section class="section-sample-cut">
    <div class="container">
        <div class="row">
            <img class="col-6" src="{{asset(Storage::url($producto->imagen_principal))}}" alt="">
            <div class="col-6 pl-3" style="display:flex; justify-content:center; align-items:center;">
                <div>
                    <h3 class="mb-4">{{$producto->name}}</h3>
                    <p class="mb-5">{{$producto->description}}</p>

                    <a href="{{ route('web.solicitud_de_presupuesto') }}" style="text-decoration: none;">
                        <div class="borde-info orange-button button">
                            <p>SOLICITAR COTIZACIÓN</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-carecteristicas ">
    <div class="container">
        <h3>CARACTERÍSTICAS PRINCIPALES</h3>
        <div class="row">
            <div class="col">
                {!!$producto->lista_izquierda!!}
            </div>
            <div class="col">
                {!!$producto->lista_derecha!!}

            </div>
        
        </div>
    </div>    
</section>

<section class="section-display-corte">
    <div class="section-display ">
        <div class="img-box"></div>
        <div class="text-box container">
            <h3>DISPLAY</h3>
            {!!$producto->lista_display!!}
        </div>
    </div>
    
    <div class="section-corte">
        <div class="text-box container">
            <h3>CORTE</h3>
            {!!$producto->lista_corte!!}
        </div>
        <div class="img-box"></div>
    </div>
</section>

<section class="section-características-tecnicas">
    <div class="container ">
        <h3>CARACTERÍSTICAS TÉCNICAS</h3>
        <div style="text-align:center; ">
            <img src="{{asset(Storage::url($producto->imagen_caract_tecnicas))}}" alt="">
        </div>
    </div>
</section>

<div style="display:flex; justify-content:center;">
    <div class="box-table-especificaciones-tecnicas" >
        <table class="table-especificaciones-tecnicas"  style="margin:auto;" >
            <thead >
                <th>Especificaciones técnicas</th>
                <th></th>
            </thead>
        
            <tbody>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Dimensiones utiles de corte</h4>
                            <p>{{number_format($producto->dimension_util_corte_ancho, 0,",", ".")}}x{{number_format($producto->dimension_util_corte_alto, 0,",", ".")}} mm</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Control de altura plasma</h4>
                            <p>{{$producto->control_altura_plasma_2}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Dimensiones generales</h4>
                            <p>{{number_format($producto->ancho, 0,",", ".")}} x {{number_format($producto->alto, 0,",", ".")}} x {{number_format($producto->profundidad, 0,",", ".")}} (mm)</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Sistema de detección de chapa</h4>
                            <p>{{$producto->sistema_deteccion_chapa}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Sistemas de corte</h4>
                            <p>{{$producto->sistemas_de_corte}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Software CAD CAM</h4>
                            <p>{{$producto->software_CAD_CAM}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Velocidad máxima de desplazamiento – corte</h4>
                            <p>{{number_format($producto->velocidad_max_desplazamiento, 0,",", ".")}}– {{number_format($producto->velocidad_max_corte, 0,",", ".")}} mm/min.</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Control</h4>
                            <p>{{$producto->control}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Transmisiones</h4>
                            <p>{{$producto->transmisiones}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Display</h4>
                            <p>{{$producto->display}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Sistema de guiado</h4>
                            <p>{{$producto->sistema_de_guiado}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Comunicación</h4>
                            <p>{{$producto->comunicacion}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Motorización</h4>
                            <p>{{$producto->motorizacion}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Alimentación eléctrica</h4>
                            <p>{{$producto->alimentacion_electrica}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-box">
                            <h4>Estructura mecánica</h4>
                            <p>{{$producto->estructura_mecanica}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="table-box">
                            <h4>Peso</h4>
                            <p>{{number_format($producto->peso, 0,",", ".")}} Kg.</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="borde-info orange-button button">
            <p>DESCARGAR FICHA TÉCNICA</p>
        </div>
            
    </div>
</div>

@endsection