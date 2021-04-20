@extends('layouts.plantilla')

@section('title','Equipos')

@section('content')

<!--INICIO SECCIÓN EQUIPOS-->        
<section class="section-nuestros-productos">
    <div class="container">

        <div class="row">
            <form class="container">
                <div class="row">
                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck1">
                    <label class="form-check-label" for="disabledFieldsetCheck1">
                    EN VENTA
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck2">
                    <label class="form-check-label" for="disabledFieldsetCheck2">
                    EN ALQUILER
                    </label>
                </div>

                <div class="mb-3 col-3">
                    <select class="form-control" name="clase_id">
                        <option >CLASE</option>
                        @foreach ($clases as $clase)
                            <option {{ old('clase_id') == $clase->id ? 'selected' : '' }} value="{{$clase->id}}"> {{$clase->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 col-3">
                    <select class="form-control" name="clase_id">
                        <option >ALTURA DE TRABAJO</option>
                        @foreach ($alturas as $altura)
                            <option {{ old('altura_id') == $altura->id ? 'selected' : '' }} value="{{$altura->id}}"> {{$altura->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 col-3">
                    <select class="form-control" name="clase_id">
                        <option >TIPO DE COMBUSTIÓN</option>
                        @foreach ($combustiones as $combustion)
                            <option {{ old('combustion_id') == $combustion->id ? 'selected' : '' }} value="{{$combustion->id}}"> {{$combustion->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
            </form>
        </div>

        <div class="row" style="margin-top: 22px; margin-bottom:84px;">
            @foreach ($clases as $clase)

                @if ($clase->show)

                    <div class="col-12 col-md-4">
                        <a href="#" style="text-decoration: none">
                            <div class="box-clase">
                                <div class="img-border-equipos" style="background-image: url({{asset(Storage::url($clase->imagen))}}); "></div>
                                <p class="nombre-clase">{{$clase->nombre}}</p>
                            </div>
                        </a>
                    </div>
                @endif

            @endforeach
        </div>
    </div>
</section>

<!--FIN SECCIÓN EQUIPOS-->        

@endsection