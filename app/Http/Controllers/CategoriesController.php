<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $categories = Category::where('parent_id', null)->orderBy('order')->get();

        return view('categories.index', compact('categories'));
    }

    public function create(){
        return view('clases.create');
    }

    public function store(Request $request){


        $clase = Clase::create($request->all());

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('public/imagenes');
            $clase->imagen = $imagen;
        }

        $clase->save();

        return redirect()->route('clases.index')->with('info','Clase creada con éxito');
    }

    public function edit(Clase $clase){
        return view('clases.edit', compact('clase'));
    }

    public function update(Request $request, Clase $clase){

        $clase->update($request->all());

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('public/imagenes');
            $clase->imagen = $imagen;
        }

        if (!$request->show) {
            $clase->show = 0;
        }
        
        $clase->save();

        return redirect()->route('clases.index')->with('info','Clase actualizada con éxito');
    }

    public function destroy(Clase $clase){
        $clase->delete();
        return redirect()->route('clases.index');
    }
}