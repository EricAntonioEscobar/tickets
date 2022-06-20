<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiController extends Controller
{
    public function usuarios(){
        return view('ti.usuarios');
    }

    public function prestamos(){
        return view('ti.prestamos');
    }
}
