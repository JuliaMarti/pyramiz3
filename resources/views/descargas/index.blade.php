@extends('layouts.app')

@section('title','Descargas')

@section('content')
<div class="container cont-descargas">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <button type="button" class="btn btn-success" style="float:right;"><a style ="color:white;" href="{{route('descargables.create')}}"><i class="fas fa-plus" style ="color:white; margin-right:7px;" ></i>AÑADIR</a></button>
                <br>


                @foreach ($descargables as $descargable)
                
                    <br>
                    <div class="card" style="margin-top:15px;">
                
                        <div class="card-body p-0" >

                            <div style="position:relative;  padding-top:15px;">
                                <h4 style="color:#03224e;font-size: 24px; margin-bottom: 15px; margin-left:5px;">{{$descargable->name}}</h4>

                                <div style="display:flex; position:absolute; left: 83%; top:10%;"> 
                                    <button type="button" class="btn btn-success" style="margin-right: 5px;"> <a style ="color:white;" href="{{route('infos.create',$descargable)}}"> <i class="fas fa-plus" style ="color:white; margin-right:7px;" ></i></a></button>
                                    <button type="button" class="btn btn-primary" style="margin-right:5px;"><a style ="color:white; "href="{{route('descargables.edit',$descargable)}}"><i class="far fa-edit"></i></a></button>
                                    <form action="{{route('descargables.destroy', $descargable) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><a style ="color:white;"href="#"><i class="fas fa-trash-alt"></i></a></button>
                            
                                    </form>
                                </div>
                            </div>
                                                                            
                            <table class="table" style="width: 100%">
                                <thead style="color:#03224e"> 
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Formato</th>
                                        <th scope="col">Archivo</th>
                                        <th scope="col">Mostrar</th>
                                        <th scope="col">Orden</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>  
                                    @foreach ($descargable->infos as $info)                            

                                                <tr>
                                                    <td>{{$info->nombre}}</td>
                                                    <td>{{$info->formato}}</td>
                                                    <td  style="max-width: 250px;">{{$info->descarga}}</td>
                                                    <td>{{$info->show ? 'Si' : 'No'}}</td>
                                                    <td>{{$info->orden}}</td>
                                                    <td style="display:flex;">
                                                        <button type="button" class="btn btn-primary" style="margin-right:5px;"><a style ="color:white;"href="{{route('infos.edit',$info)}}"><i class="far fa-edit"></i></a></button>
                                                        <form action="{{route('infos.destroy', $info) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><a style ="color:white;"href="#"><i class="fas fa-trash-alt"></i></a></button>
                                                
                                                        </form>
                                                    </td>
                                                </tr>
                                    @endforeach

                                </tbody>
                            </table>    

                            <hr style="font-weight: bold; color:black">

                        </div>
                    </div>
                    @endforeach
                    @if (session('info'))
                    <script>
                        alert("{{ session('info') }}");
                    </script>
                    @endif
        </div>
    </div>
</div>
@endsection