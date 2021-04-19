@extends('layouts.app')

@section('title','Configuración')

@section('content')


<div class="container cont-configuracion">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <?php $configuracion = $configuraciones->first() ?>
            
                        
                    <form action="{{route('configuraciones.update',$configuracion)}}" enctype="multipart/form-data" method="POST">
                                
                        @csrf
                        
                        @method('put')
                        
                         <div class="form-row">
                            <!--<div class="form-group col-md-6">
                                <label>Direccón</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" name="direccion" value="{{old('direccion',$configuracion->direccion)}}" class="form-control"  placeholder="Direccón">
                                </div>
                            </div>   --> 
                            <div class="form-group col-md-6">
                                <label>Emial Info</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email_info" value="{{old('email_info',$configuracion->email_info)}}" class="form-control"  placeholder="Emial">
                                </div>
                            </div>  
                        </div>

                        <div class="form-row">
                            <!--<div class="form-group col-md-6">
                                <label>Celular</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <input type="tel" name="tel_celular" value="{{old('tel_celular',$configuracion->tel_celular)}}"  class="form-control"  placeholder="Celular">
                                </div>
                            </div>    -->
                            <div class="form-group col-md-6">
                                <label>WhatsApp</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-whatsapp"></i></span>
                                    </div>
                                    <input type="tel" name="wsp" value="{{old('wsp',$configuracion->wsp)}}" class="form-control"  placeholder="WhatsApp">
                                </div>
                            </div>  
                        </div>
                        


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Instagram</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                                    </div>
                                    <input type="url" name="instagram" value="{{old('instagram',$configuracion->instagram)}}"  class="form-control"  placeholder="Instagram">
                                </div>    
                            </div>
                        
                            <div class="form-group col-md-4">

                                <label>Facebook</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-f"></i></span>
                                    </div>
                                    <input type="url" name="facebook" value="{{old('facebook',$configuracion->facebook)}}"  class="form-control"  placeholder="Facebook">
                                </div> 
                            </div>
                                                    
                            <div class="form-group col-md-4">
                                <label>Linkedin</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-youtube"></i></span>
                                    </div>
                                    <input type="url" name="linkedin" value="{{old('linkedin',$configuracion->linkedin)}}"  class="form-control"  placeholder="Youtube">
                                </div> 
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mb-2" >Actualizar Configuración</button>
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