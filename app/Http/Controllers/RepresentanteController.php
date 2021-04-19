<?php

namespace App\Http\Controllers;

use App\Models\Representante;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    public function index(){

        $representantes = Representante::orderBy('orden')->get();

        return view('representantes.index', compact('representantes'));
    }

    public function create(){
        return view('representantes.create');
    }

    public function store(Request $request){


        $representante = Representante::create($request->all());

        if ($request->hasFile('imagen')) {
            $representanteRq = $request->file('imagen')->store('public/imagenes');
            $representante->imagen = $representanteRq;
        }

        $representante->save();

        return redirect()->route('representantes.index')->with('info','Representante creado con éxito');
    }

    public function edit(Representante $representante){
        return view('representantes.edit', compact('representante'));
    }

    public function update(Request $request, Representante $representante){

        $representante->update($request->all());

        if ($request->hasFile('imagen')) {
            $representanteRq = $request->file('imagen')->store('public/representantes');
            $representante->imagen = $representanteRq;
        }

        if (!$request->show) {
            $representante->show = 0;
        }

        $representante->save();

        return redirect()->route('representantes.index')->with('info','Representante actualizado con éxito');
    }

    
    public function destroy(Representante $representante){
        $representante->delete();
        return redirect()->route('representantes.index');
    }
}