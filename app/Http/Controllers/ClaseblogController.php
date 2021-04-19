<?php

namespace App\Http\Controllers;

use App\Models\Claseblog;
use Illuminate\Http\Request;

class ClaseblogController extends Controller
{
    public function index(){

        $claseblogs = Claseblog::orderBy('orden')->get();

        return view('claseblogs.index', compact('claseblogs'));
    }

    public function create(){
        return view('claseblogs.create');
    }

    public function store(Request $request){


        $claseblog = Claseblog::create($request->all());

        $claseblog->save();

        return redirect()->route('claseblogs.index')->with('info','Categoria de noticias creada con éxito');
    }

    public function edit(Claseblog $claseblog){
        return view('claseblogs.edit', compact('claseblog'));
    }

    public function update(Request $request, Claseblog $claseblog){

        $claseblog->update($request->all());

        if (!$request->show) {
            $claseblog->show = 0;
        }
        
        $claseblog->save();

        return redirect()->route('claseblogs.index')->with('info','Categoria de noticias actualizada con éxito');
    }

    public function destroy(Claseblog $claseblog){
        $claseblog->delete();
        return redirect()->route('claseblogs.index');
    }
}
