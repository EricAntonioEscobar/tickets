<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiController extends Controller
{
    public function index(){
        return view('ti.index');
    }
}
