@extends('layouts.app')

@section('title','Tipos de combustión')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <button type="button" class="btn btn-success" style="float:right;"><a style ="color:white;" href="{{route('combustiones.create')}}"><i class="fas fa-plus" style ="color:white; margin-right:7px;" ></i>AÑADIR</a></button>
                <br>
                <br>
                <div class="card" style="margin-top:15px;">

                    <div class="card-body p-0" >

                        <table class="table">
                            <thead style="color:#03224e"> 
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Mostrar</th>
                                    <th scope="col">Orden</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>  

                                @foreach ($combustiones as $combustion)
                                <tr>
                                    <td>{{$combustion->nombre}}</td>
                                    <td>{{$combustion->show ? 'Si' : 'No'}}</td>
                                    <td>{{$combustion->orden}}</td>
                                    <td style="display:flex;">
                                        <button type="button" class="btn btn-primary" style="margin-right:5px;"><a style ="color:white;"href="{{route('combustiones.edit',$combustion)}}"><i class="far fa-edit"></i></a></button>
                                        <form action="{{route('combustiones.destroy', $combustion) }}" method="POST">
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