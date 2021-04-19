<?php

namespace App\Http\Controllers;

use App\Models\Combustion;
use Illuminate\Http\Request;

class CombustionController extends Controller
{
    public function index(){

        $combustiones = Combustion ::orderBy('orden')->get();

        return view('combustiones.index', compact('combustiones'));
    }

    public function create(){
        return view('combustiones.create');
    }

    public function store(Request $request){


        $combustiones = Combustion::create($request->all());

        return redirect()->route('combustiones.index')->with('info',' Tipo de combustión agregada con éxito');
    }

    public function edit(Combustion $combustion){
        return view('combustiones.edit', compact('combustion'));
    }

    public function update(Request $request, Combustion $combustion){

        $combustion->update($request->all());

        if (!$request->show) {
            $combustion->show = 0;
        }

        $combustion->save();

        return redirect()->route('combustiones.index')->with('info',' Tipo de combustión actualizada con éxito');
    }

    
    public function destroy(Combustion $combustion){
        $combustion->delete();
        return redirect()->route('combustiones.index');
    }
}
