@extends('layouts.app')

@section('title','Servicios')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <button type="button" class="btn btn-success" style="float:right;"><a style ="color:white;" href="{{route('servicios.create')}}"><i class="fas fa-plus" style ="color:white; margin-right:7px;" ></i>AÑADIR</a></button>
                <br>
                <br>
                <div class="card" style="margin-top:15px;">

                    <div class="card-body p-0" >

                        <table class="table">
                            <thead style="color:#03224e"> 
                                <tr>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Título/Subtítulo</th>
                                    <th scope="col">Mostrar</th>
                                    <th scope="col">Mostrar en Home</th>
                                    <th scope="col">Orden</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>  

                                @foreach ($servicios as $servicio)
                                <tr>
                                    <td> <img src="{{asset(Storage::url($servicio->imagen))}}" style="height:60px;"></td>
                                    <td>{{$servicio->titulo}}, {{$servicio->subtitulo}}</td>
                                    <td>{{$servicio->show ? 'Si' : 'No'}}</td>
                                    <td>{{$servicio->home ? 'Si' : 'No'}}</td>
                                    <td>{{$servicio->orden}}</td>
                                    <td  style="display: flex">
                                        <button type="button" class="btn btn-primary" style="margin-right:5px;"><a style ="color:white; "href="{{route('servicios.edit',$servicio)}}"><i class="far fa-edit"></i></a></button>
                                        <form action="{{route('servicios.destroy', $servicio) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><a style ="color:white;"href="#"><i class="fas fa-trash-alt"></i></a></button>
                                
                                        </form>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot> 
                                <tr>

                                </tr>
                            </tfoot>
                        </table>


                        @if (session('info'))
                        <script>
                            alert("{{ session('info') }}");
                        </script>
                        @endif
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection