<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Http;

class WebController extends Controller
{

    public function index(){


        return view('web.index');
    }

    
}