<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;


class EmailController extends Controller
{
    public function store(Request $request){


        Email::create($request->all());

        return redirect()->route('web.home');
    }

}
