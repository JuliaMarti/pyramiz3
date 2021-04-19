<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $homes = Home::get();

        return view('homes.index', compact('homes'));
    }


    public function update(Request $request, Home $home){

        $home->update($request->all());


        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('public/imagenes');
            $home->logo = $logo;
        }

        if ($request->hasFile('logo_footer')) {
            $logo_footer = $request->file('logo_footer')->store('public/imagenes');
            $home->logo_footer = $logo_footer;
        }

        if (!$request->seccion_1_show) {
            $home->seccion_1_show = 0;
        }

        if (!$request->seccion_2_show) {
            $home->seccion_2_show = 0;
        }

        $home->save();

        return redirect()->route('homes.index')->with('info','Información del inicio actualizada con éxito');
    }
}