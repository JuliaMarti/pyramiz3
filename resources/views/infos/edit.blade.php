@extends('layouts.app')

@section('title','Modificar Archivo')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <a style ="color:grey;" href="{{route('descargas.index')}}"><i class="fas fa-arrow-circle-left" style ="color:grey; margin-right:6px;"></i>Volver al listado de descargas</a>

            <div class="card" style="margin-top:15px;">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="{{route('infos.update', $info)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Orden</label>
                                    <input type="text" name="orden" value="{{old('orden',$info->orden)}}" class="form-control" placeholder="Orden">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Formato</label>
                                    <input type="text" name="formato" value="{{old('formato',$info->formato)}}" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{old('nombre',$info->nombre)}}" class="form-control" placeholder="Nombre">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Archivo</label>
                                <input type="file" name="descarga" value="{{old('descarga',$info->descarga)}}" class="form-control-file" >
                            </div>

                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" {{ old('show',$info->show) == 1 ? 'checked' : '' }} name="show" value="1">
                                <label class="form-check-label">Mostrar</label>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary mb-2">Actualizar archivo</button>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
