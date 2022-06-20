<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        return view('empleado.index');
    }

    public function equipos_asignados(){
      /*   $equipos_asignados = Inventario::all()->where('id_usuario', '5'); */
        return view('empleado.equipos');
    }

    public function solicitar_equipo(){
        return view('empleado.solicitar');
    }
}
