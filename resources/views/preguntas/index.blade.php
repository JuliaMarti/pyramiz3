@extends('layouts.app')

@section('title','Preguntas')

@section('content')

<div class="container cont-preguntas">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <button type="button" class="btn btn-success" style="float:right;"><a style ="color:white;" href="{{route('preguntas.create')}}"><i class="fas fa-plus" style ="color:white; margin-right:7px;" ></i>AÑADIR</a></button>
                <br>
                <br>
                <div class="card" style="margin-top:15px;">

                    <div class="card-body" >

                                @foreach ($preguntas as $pregunta)
                                    <div style="display:flex; justify-content: space-between; width: 20%;">
                                        <p>Mostrar: {{$pregunta->show ? 'Si' : 'No'}}</p>
                                        <p>Orden: {{$pregunta->orden}}</p>
                                    </div>
                                    <p class="pregunta-titulo">{{$pregunta->titulo}}</p>
                                    <p class="pregunta-parrafo">{{$pregunta->parrafo}}</p>
                                    <div style="display:flex;">
                                        <button type="button" class="btn btn-primary" style="margin-right:5px;"><a style ="color:white;"href="{{route('preguntas.edit',$pregunta)}}"><i class="far fa-edit"></i></a></button>
                                        <form action="{{route('preguntas.destroy', $pregunta) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><a style ="color:white;"href="#"><i class="fas fa-trash-alt"></i></a></button>
                                
                                        </form>
                                    </div>
                                    <hr>
                                @endforeach
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