@extends('layouts.app')

@section('title','Home')

@section('content')


<div class="container cont-home">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <?php $home = $homes->first() ?>
                                
                    <form action="{{route('homes.update',$home)}}" enctype="multipart/form-data" method="POST" >
                                
                        @csrf
                        
                        @method('put')
                        
                        <div class="form-group">
                            <label><h4 class="primer-h4">Logo del encabezado</h4></label>
                            <hr>
                            <input type="file" accept="image/*" name="logo" value="{{old('logo', $home->logo)}}" class="form-control-file" >
                        </div>
                        

                        <div class="form-group">
                            <label><h4 class="primer-h4">Logo del pie de página</h4></label>
                            <hr>
                            <input type="file" accept="image/*" name="logo_footer" value="{{old('logo_footer', $home->logo_footer)}}" class="form-control-file" >
                        </div>

                        <h4>Sección 1</h4>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="seccion_1_show" {{ old('seccion_1_show', $home->seccion_1_show) == 1 ? 'checked' : '' }} value="1">
                            <label class="form-check-label">Mostrar</label>
                        </div>
                    
                        <div class="form-group ">
                            <label>Título</label>
                            <textarea class="form-control summernote" name="seccion_1_titulo"  rows="3">{{old('seccion_1_titulo',$home->seccion_1_titulo)}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Párrafo</label>
                            <textarea class="form-control" name="seccion_1_parrafo"  rows="3">{{old('seccion_1_parrafo',$home->seccion_1_parrafo)}}</textarea>
                        </div>


                        <h4>Sección 2</h4>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="seccion_2_show" {{ old('seccion_2_show', $home->seccion_2_show) == 1 ? 'checked' : '' }} value="1">
                            <label class="form-check-label">Mostrar</label>
                        </div>

                        <div class="form-group ">
                            <label>Título</label>
                            <textarea class="form-control summernote" name="seccion_2_titulo"  rows="3">{{old('seccion_2_titulo',$home->seccion_2_titulo)}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Párrafo</label>
                            <textarea class="form-control" name="seccion_2_parrafo"  rows="3">{{old('seccion_2_parrafo',$home->seccion_2_parrafo)}}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mb-2" >Actualizar Home</button>
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