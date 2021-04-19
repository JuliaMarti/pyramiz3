@extends('layouts.app')

@section('title','Empresa')

@section('content')
<div class="container cont-empresa">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <?php $empresa = $empresas->first() ?>


                    <form action="{{route('empresas.update',$empresa)}}" enctype="multipart/form-data" method="POST">
                                
                        @csrf
                        
                        @method('put')
                        

                        <div class="form-group">
                            <label><h4 class="primer-h4">Primer párrafo (izquierda)</h4></label>
                            <hr>
                            <textarea class="form-control summernote" name="parrafo_izquierda"  rows="4">{{old('parrafo_izquierda',$empresa->parrafo_izquierda)}}</textarea>
                        </div>
    
    
                        <div class="form-group">
                            <label><h4>Segundo párrafo (derecha)</h4></label>
                            <hr>
                            <textarea class="form-control summernote" name="parrafo_derecha"  id="summernote"  rows="4">{{old('parrafo_derecha',$empresa->parrafo_derecha)}}</textarea>
                        </div>
                            
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" accept="image/*" name="imagen" value="{{old('imagen',$empresa->imagen)}}" class="form-control-file" >
                        </div>

                        <div class="form-group">
                            <label><h4>Párrafo de la imagen</h4></label>
                            <hr>
                            <textarea class="form-control" name="parrafo_imagen"  id="summernote"  rows="4">{{old('parrafo_imagen',$empresa->parrafo_imagen)}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2" >Actualizar Empresa</button>
                    </form>
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