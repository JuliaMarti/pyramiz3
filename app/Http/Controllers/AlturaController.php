<?php

namespace App\Http\Controllers;

use App\Models\Altura;
use Illuminate\Http\Request;

class AlturaController extends Controller
{
    public function index(){

        $alturas = Altura ::orderBy('orden')->get();

        return view('alturas.index', compact('alturas'));
    }

    public function create(){
        return view('alturas.create');
    }

    public function store(Request $request){


        $alturas = Altura::create($request->all());

        return redirect()->route('alturas.index')->with('info','Altura agregada con éxito');
    }

    public function edit(Altura $altura){
        return view('alturas.edit', compact('altura'));
    }

    public function update(Request $request, Altura $altura){

        $altura->update($request->all());

        if (!$request->show) {
            $altura->show = 0;
        }

        $altura->save();

        return redirect()->route('alturas.index')->with('info','Altura actualizada con éxito');
    }

    
    public function destroy(Altura $altura){
        $altura->delete();
        return redirect()->route('alturas.index');
    }
}
