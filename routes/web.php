<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('adm', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('web.home');
Route::post('/', [App\Http\Controllers\EmailController::class, 'store'])->name('web.email');

Route::get('empresa', [App\Http\Controllers\WebController::class, 'empresa'])->name('web.empresa');

Route::get('equipos', [App\Http\Controllers\WebController::class, 'equipos'])->name('web.equipos.equipos');
Route::get('equipos/clase/{clase}', [App\Http\Controllers\WebController::class, 'equipos_clase'])->name('web.equipos.clase');
Route::get('equipos/{equipo}', [App\Http\Controllers\WebController::class, 'equipos_equipo'])->name('web.equipos.equipo');

Route::get('servicios', [App\Http\Controllers\WebController::class, 'servicios'])->name('web.servicios');
Route::post('servicios/enviar', [App\Http\Controllers\WebController::class, 'contactanos_post_venta'])->name('web.contactanos_post_venta');

Route::get('blogs/{filtro}', [App\Http\Controllers\WebController::class, 'blogs'])->name('web.blogs');
Route::get('blogs/noticia/{noticia}', [App\Http\Controllers\WebController::class, 'blogs_noticia'])->name('web.blogs.noticia');

Route::get('descargas/{descargable}', [App\Http\Controllers\WebController::class, 'descargas'])->name('web.descargas');
Route::get('clientes', [App\Http\Controllers\WebController::class, 'clientes'])->name('web.clientes');
Route::get('videos', [App\Http\Controllers\WebController::class, 'videos'])->name('web.videos');
Route::get('preguntas_frecuentes', [App\Http\Controllers\WebController::class, 'preguntas_frecuentes'])->name('web.preguntas_frecuentes');
Route::get('solicitud_de_presupuesto', [App\Http\Controllers\WebController::class, 'solicitud_de_presupuesto'])->name('web.solicitud_de_presupuesto');
Route::post('solicitud_de_presupuesto', [App\Http\Controllers\WebController::class, 'presupuesto'])->name('web.presupuesto');

Route::get('contacto/{direccion}', [App\Http\Controllers\WebController::class, 'contacto'])->name('web.contacto');
Route::post('contacto/{direccion}', [App\Http\Controllers\WebController::class, 'contactanos'])->name('web.contactanos');






Route::get('adm/equipos/index', [App\Http\Controllers\EquipoController::class, 'index'])->name('equipos.index');
Route::get('adm/equipos/create', [App\Http\Controllers\EquipoController::class, 'create'])->name('equipos.create');
Route::post('adm/equipos', [App\Http\Controllers\EquipoController::class, 'store'])->name('equipos.store');
Route::get('adm/equipos/{equipo}/edit', [App\Http\Controllers\EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('adm/equipos/{equipo}/update', [App\Http\Controllers\EquipoController::class, 'update'])->name('equipos.update');
Route::delete('adm/equipos/{equipo}', [App\Http\Controllers\EquipoController::class, 'destroy'])->name('equipos.destroy');


Route::get('clases/index', [App\Http\Controllers\ClaseController::class, 'index'])->name('clases.index'); 
Route::get('clases/create',[App\Http\Controllers\ClaseController::class, 'create'])->name('clases.create');
Route::post('clases',[App\Http\Controllers\ClaseController::class, 'store'])->name('clases.store');
Route::get('clases/{clase}/edit',[App\Http\Controllers\ClaseController::class, 'edit'])->name('clases.edit');
Route::put('clases/{clase}/update',[App\Http\Controllers\ClaseController::class, 'update'])->name('clases.update');
Route::delete('clases/{clase}',[App\Http\Controllers\ClaseController::class, 'destroy'])->name('clases.destroy');

Route::get('categories/index', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index'); 
Route::get('categories/create',[App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
Route::post('categories',[App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
Route::get('categories/{category}/edit',[App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}/update',[App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}',[App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');


Route::get('alturas.index', [App\Http\Controllers\AlturaController::class, 'index'])->name('alturas.index'); 
Route::get('alturas/create',[App\Http\Controllers\AlturaController::class, 'create'])->name('alturas.create');
Route::post('alturas',[App\Http\Controllers\AlturaController::class, 'store'])->name('alturas.store');
Route::get('alturas/{altura}/edit',[App\Http\Controllers\AlturaController::class, 'edit'])->name('alturas.edit');
Route::put('alturas/{altura}/update',[App\Http\Controllers\AlturaController::class, 'update'])->name('alturas.update');
Route::delete('alturas/{altura}',[App\Http\Controllers\AlturaController::class, 'destroy'])->name('alturas.destroy');

Route::get('combustiones.index', [App\Http\Controllers\CombustionController::class, 'index'])->name('combustiones.index'); 
Route::get('combustiones/create',[App\Http\Controllers\CombustionController::class, 'create'])->name('combustiones.create');
Route::post('combustiones',[App\Http\Controllers\CombustionController::class, 'store'])->name('combustiones.store');
Route::get('combustiones/{combustion}/edit',[App\Http\Controllers\CombustionController::class, 'edit'])->name('combustiones.edit');
Route::put('combustiones/{combustion}/update',[App\Http\Controllers\CombustionController::class, 'update'])->name('combustiones.update');
Route::delete('combustiones/{combustion}',[App\Http\Controllers\CombustionController::class, 'destroy'])->name('combustiones.destroy');



Route::get('servicios.index', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicios.index'); 
Route::get('servicios/create',[App\Http\Controllers\ServicioController::class, 'create'])->name('servicios.create');
Route::post('servicios',[App\Http\Controllers\ServicioController::class, 'store'])->name('servicios.store');
Route::get('servicios/{servicio}/edit',[App\Http\Controllers\ServicioController::class, 'edit'])->name('servicios.edit');
Route::put('servicios/{servicio}/update',[App\Http\Controllers\ServicioController::class, 'update'])->name('servicios.update');
Route::delete('servicios/{servicio}',[App\Http\Controllers\ServicioController::class, 'destroy'])->name('servicios.destroy');



Route::get('configuraciones', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('configuraciones.index');
Route::put('configuraciones/{configuracion}/update', [App\Http\Controllers\ConfiguracionController::class, 'update'])->name('configuraciones.update');

Route::get('direcciones.index', [App\Http\Controllers\DireccionController::class, 'index'])->name('direcciones.index'); 
Route::get('direcciones/create',[App\Http\Controllers\DireccionController::class, 'create'])->name('direcciones.create');
Route::post('direcciones',[App\Http\Controllers\DireccionController::class, 'store'])->name('direcciones.store');
Route::get('direcciones/{direccion}/edit',[App\Http\Controllers\DireccionController::class, 'edit'])->name('direcciones.edit');
Route::put('direcciones/{direccion}/update',[App\Http\Controllers\DireccionController::class, 'update'])->name('direcciones.update');
Route::delete('direcciones/{direccion}',[App\Http\Controllers\DireccionController::class, 'destroy'])->name('direcciones.destroy');

Route::get('imagenes', [App\Http\Controllers\ImagenController::class, 'index'])->name('imagenes.index');
Route::get('imagenes/create', [App\Http\Controllers\ImagenController::class, 'create'])->name('imagenes.create');
Route::post('imagenes', [App\Http\Controllers\ImagenController::class, 'store'])->name('imagenes.store');
Route::get('imagenes/{imagen}/edit', [App\Http\Controllers\ImagenController::class, 'edit'])->name('imagenes.edit');
Route::put('imagenes/{imagen}/update', [App\Http\Controllers\ImagenController::class, 'update'])->name('imagenes.update');
Route::delete('imagenes/{imagen}', [App\Http\Controllers\ImagenController::class, 'destroy'])->name('imagenes.destroy');


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('homes.index'); 
Route::put('home/{home}/update',[App\Http\Controllers\HomeController::class, 'update'])->name('homes.update');


Route::get('empresas.index', [App\Http\Controllers\EmpresaController::class, 'index'])->name('empresas.index'); 
Route::put('empresas/{empresa}/update',[App\Http\Controllers\EmpresaController::class, 'update'])->name('empresas.update');




Route::get('descargas.index', [App\Http\Controllers\DescargaController::class, 'index'])->name('descargas.index'); 

Route::get('descargas/create_descargable',[App\Http\Controllers\DescargaController::class, 'create_descargable'])->name('descargables.create');
Route::post('descargas/store_descargable',[App\Http\Controllers\DescargaController::class, 'store_descargable'])->name('descargables.store');
Route::get('descargas/{descargable}/edit_descargable',[App\Http\Controllers\DescargaController::class, 'edit_descargable'])->name('descargables.edit');
Route::put('descargas/{descargable}/update_descargable',[App\Http\Controllers\DescargaController::class, 'update_descargable'])->name('descargables.update');
Route::delete('descargas/{descargable}/delete_descargable',[App\Http\Controllers\DescargaController::class, 'destroy_descargable'])->name('descargables.destroy');

Route::get('descargas/{descargable}/create_info',[App\Http\Controllers\DescargaController::class, 'create_info'])->name('infos.create');
Route::post('descargas/{descargable}/store_info',[App\Http\Controllers\DescargaController::class, 'store_info'])->name('infos.store');
Route::get('descargas/{info}/edit_info',[App\Http\Controllers\DescargaController::class, 'edit_info'])->name('infos.edit');
Route::put('descargas/{info}/update_info',[App\Http\Controllers\DescargaController::class, 'update_info'])->name('infos.update');
Route::delete('descargas/{info}/delete_info',[App\Http\Controllers\DescargaController::class, 'destroy_info'])->name('infos.destroy');


Route::get('representantes.index', [App\Http\Controllers\RepresentanteController::class, 'index'])->name('representantes.index'); 
Route::get('representantes/create',[App\Http\Controllers\RepresentanteController::class, 'create'])->name('representantes.create');
Route::post('representantes',[App\Http\Controllers\RepresentanteController::class, 'store'])->name('representantes.store');
Route::get('representantes/{representante}/edit',[App\Http\Controllers\RepresentanteController::class, 'edit'])->name('representantes.edit');
Route::put('representantes/{representante}/update',[App\Http\Controllers\RepresentanteController::class, 'update'])->name('representantes.update');
Route::delete('representantes/{representante}',[App\Http\Controllers\RepresentanteController::class, 'destroy'])->name('representantes.destroy');


Route::get('noticias.index', [App\Http\Controllers\NoticiaController::class, 'index'])->name('noticias.index'); 
Route::get('noticias/create',[App\Http\Controllers\NoticiaController::class, 'create'])->name('noticias.create');
Route::post('noticias',[App\Http\Controllers\NoticiaController::class, 'store'])->name('noticias.store');
Route::get('noticias/{noticia}/edit',[App\Http\Controllers\NoticiaController::class, 'edit'])->name('noticias.edit');
Route::put('noticias/{noticia}/update',[App\Http\Controllers\NoticiaController::class, 'update'])->name('noticias.update');
Route::delete('noticias/{noticia}',[App\Http\Controllers\NoticiaController::class, 'destroy'])->name('noticias.destroy');


Route::get('claseblogs.index', [App\Http\Controllers\ClaseblogController::class, 'index'])->name('claseblogs.index'); 
Route::get('claseblogs/create',[App\Http\Controllers\ClaseblogController::class, 'create'])->name('claseblogs.create');
Route::post('claseblogs',[App\Http\Controllers\ClaseblogController::class, 'store'])->name('claseblogs.store');
Route::get('claseblogs/{claseblog}/edit',[App\Http\Controllers\ClaseblogController::class, 'edit'])->name('claseblogs.edit');
Route::put('claseblogs/{claseblog}/update',[App\Http\Controllers\ClaseblogController::class, 'update'])->name('claseblogs.update');
Route::delete('claseblogs/{claseblog}',[App\Http\Controllers\ClaseblogController::class, 'destroy'])->name('claseblogs.destroy');




Route::get('preguntas.index', [App\Http\Controllers\PreguntaController::class, 'index'])->name('preguntas.index'); 
Route::get('preguntas/create',[App\Http\Controllers\PreguntaController::class, 'create'])->name('preguntas.create');
Route::post('preguntas',[App\Http\Controllers\PreguntaController::class, 'store'])->name('preguntas.store');
Route::get('preguntas/{pregunta}/edit',[App\Http\Controllers\PreguntaController::class, 'edit'])->name('preguntas.edit');
Route::put('preguntas/{pregunta}/update',[App\Http\Controllers\PreguntaController::class, 'update'])->name('preguntas.update');
Route::delete('preguntas/{pregunta}',[App\Http\Controllers\PreguntaController::class, 'destroy'])->name('preguntas.destroy');