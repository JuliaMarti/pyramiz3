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
        $categories = Category::where('parent_id', null)->orderBy('order')->get();
        return view('categories.create', ['categories' => $categories]);
    }

    public function store(Request $request, Category $category){

        $category->parent_id = $request->parent_id;
        $category->order     = $request->order;
        $category->name      = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/imagenes');
            $category->image = $image;
        }

        $category->save();

        return redirect()->route('categories.index')->with('info','Categoria creada con éxito');
    }

    public function edit(Category $category){
        $categories = Category::where('parent_id', null)->orderBy('order')->get();
        return view('categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category){

        $category->parent_id = $request->parent_id;
        $category->order     = $request->order;
        $category->name      = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/imagenes');
            $category->image = $image;
        }

        $category->save();

        return redirect()->route('categories.index')->with('info','Categoria actualizada con éxito');
    }

    public function destroy(Clase $clase){
        $clase->delete();
        return redirect()->route('clases.index');
    }
}