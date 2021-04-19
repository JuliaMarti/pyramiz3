<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;

class ConfiguracionController extends Controller
{
    public function index(){

        $configuraciones = Configuracion::get();

        return view('configuraciones.index', compact('configuraciones'));
    }


    public function update(Request $request, Configuracion $configuracion){

        $configuracion->update($request->all());

        return redirect()->route('configuraciones.index')->with('info','Configuración actualizada con éxito');
    }
}



