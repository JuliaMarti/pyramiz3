<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Representante;
use App\Models\Configuracion;
use App\Models\Descargable;
use App\Models\Empresa;
use App\Models\Home;
use App\Models\Imagen;
use App\Models\Pregunta;
use App\Models\Equipo;
use App\Models\Noticia;
use App\Models\Info;
use App\Models\Servicio;



use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use App\Mail\PostVentaMailable;
use App\Models\Altura;
use App\Models\Claseblog;
use App\Models\Combustion;
use App\Models\Direccion;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index(){

        $breadcrumb = [
            [ 'title'  => 'home', 'link' => 'web.home','cat'=> ''],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $noticias=Noticia::orderBy('orden')->get();

        $claseblogs=Claseblog::orderBy('orden')->get();

        $servicios=Servicio::orderBy('orden')->get();

        $representantes=Representante::orderBy('orden')->get();

        $imagenes=Imagen::where('ubicacion','Home')->where('show',1)->orderBy('orden')->get();


        return view('web.index',compact('breadcrumb','noticias','claseblogs','home','configuracion','servicios','representantes','imagenes','direccionesFooter'));
        // return $categorias;
    }

    public function empresa(){

        $breadcrumb = [
            [ 'title'  => 'empresa', 'link' => 'web.home','cat'=> '' ],
        ];

        $title= 'empresa';

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $empresas=Empresa::get();
        $empresa=$empresas->first();

        $imagenes=Imagen::where('ubicacion','Empresa')->where('show',1)->orderBy('orden')->get();

        return view('web.empresa',compact('breadcrumb','home','empresa','configuracion','imagenes','direccionesFooter'));
    }

    public function servicios(){

        $breadcrumb = [
            [ 'title'  => 'servicios', 'link' => 'web.home','cat'=> '' ],
        ];

        $title= 'servicios';

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $servicios=Servicio::where('show',1)->orderBy('orden')->get();

        return view('web.servicios',compact('breadcrumb','home','configuracion','servicios','direccionesFooter'));
    }

    public function contactanos_post_venta(Request $request){
        $correo = new PostVentaMailable($request->all());

        Mail::to('juulimarti@gmail.com')->send($correo);

        return redirect()->route('web.servicios')->with('info','Mensaje enviado');
    }


     public function ofertas(){

        $breadcrumb = [
            [ 'title'  => 'ofertas', 'link' => 'web.home','cat'=> '' ],
        ];

        $title= 'ofertas';

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();


        return view('web.ofertas',compact('breadcrumb','home','configuracion','direccionesFooter'));
    }



    
    public function blogs($filtro){

        $breadcrumb = [
            [ 'title'  => 'blogs', 'link' => 'web.home','cat'=> '' ],
        ];

        $title= 'empresa';

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $noticias=Noticia::orderBy('orden')->get();

        return view('web.blogs.blogs',compact('breadcrumb','home','configuracion','noticias','filtro','direccionesFooter'));
    }

    
    public function blogs_noticia(Noticia $noticia){

        $breadcrumb = [
            [ 'title'  => 'empresa', 'link' => 'web.home','cat'=> '' ],
        ];

        $title= 'empresa';

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $claseblogs=Claseblog::orderBy('orden')->get();


        return view('web.blogs.noticia',compact('breadcrumb','home','configuracion','noticia','claseblogs','direccionesFooter'));
    }

    public function equipos(){
        $breadcrumb = [
            [ 'title'  => 'equipos', 'link' => 'web.equipos.equipos','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $clases=Clase::orderBy('orden')->get();
        $alturas=Altura::orderBy('orden')->get();
        $combustiones=Combustion::orderBy('orden')->get();


        return view('web.equipos.equipos', compact('breadcrumb','home','configuracion','clases','alturas','combustiones','direccionesFooter'));
    }

    public function equipos_clase(Clase $categoria){

        $breadcrumb = [
            [ 'title'  => 'equipos', 'link' => 'web.equipos','cat'=> '' ],
            [ 'title'  => $categoria->name, 'link' => 'web.equipos.categoria', 'cat'=> $categoria->id ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $equipos=Equipo::where('categoria_id',$categoria->id)->orderBy('orden')->get();

        return view('web.equipos.clase', compact('breadcrumb','home','configuracion','categoria','equipos','direccionesFooter'));
    }

    public function equipos_equipo(Equipo $producto){

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();
        
        $categoria= Clase::find($producto->categoria_id);

        $breadcrumb = [
            [ 'title'  => 'equipos', 'link' => 'web.equipos','cat'=> '' ],
            [ 'title'  => $categoria->nombre, 'link' => 'web.equipos.categoria', 'cat'=> $categoria->id ],
            [ 'title'  => $producto->nombre, 'link' => 'web.equipos.producto', 'cat'=> $producto->id ],
        ];

        return view('web.equipos.equipo', compact('breadcrumb','home','configuracion','categoria','producto','direccionesFooter'));
    }

    public function descargas(Descargable $descargable){
        $breadcrumb = [
            [ 'title'  => 'descargas', 'link' => 'web.descargas','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $descargables=Descargable::orderBy('orden')->get();

        $desc_id= $descargable->id;

        $infos= Info::where('descargable_id', $desc_id)->orderBy('orden')->get();


        return view('web.descargas', compact('breadcrumb','home','configuracion','descargables','desc_id','infos','direccionesFooter'));
    }

    public function clientes(){
        $breadcrumb = [
            [ 'title'  => 'clientes', 'link' => 'web.clientes','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $clientes=Representante::orderBy('orden')->get();


        return view('web.clientes', compact('breadcrumb','home','configuracion','clientes','direccionesFooter'));
    }

    public function videos(){
        $breadcrumb = [
            [ 'title'  => 'videos', 'link' => 'web.videos','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $videos=Noticia::orderBy('orden')->get();


        return view('web.videos', compact('breadcrumb','home','configuracion','videos','direccionesFooter'));
    }

    public function preguntas_frecuentes(){
        $breadcrumb = [
            [ 'title'  => 'preguntas frecuentes', 'link' => 'web.preguntas_frecuentes','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $preguntas=Pregunta::orderBy('orden')->get();

        return view('web.preguntas_frecuentes', compact('breadcrumb','home','configuracion','preguntas','direccionesFooter'));
    }

    public function solicitud_de_presupuesto(){
        $breadcrumb = [
            [ 'title'  => 'solicitud de presupuesto', 'link' => 'web.solicitud_de_presupuesto','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        return view('web.solicitud_de_presupuesto', compact('breadcrumb','home','configuracion','direccionesFooter'));
    }


    public function contacto(Direccion $direccion){
        $breadcrumb = [
            [ 'title'  => 'contacto', 'link' => 'web.contacto','cat'=> '' ],
        ];

        $homes= Home::get();
        $home = $homes->first();

        $configuraciones=Configuracion::get();
        $configuracion=$configuraciones->first();

        $direccionesFooter=Direccion::where('footer',1)->get();

        $direcciones=Direccion::get();


        
        return view('web.contacto', compact('breadcrumb','home','configuracion','direccionesFooter','direcciones','direccion'));
    }

    public function contactanos(Request $request, $direccion_id){

        $correo = new ContactanosMailable($request->all());
        
        Mail::to('juulimarti@gmail.com')->send($correo);// Aqui va el codigo en caso de que si supero el captcha


        return redirect()->route('web.contacto',$direccion_id)->with('info','Mensaje enviado');
    }
}