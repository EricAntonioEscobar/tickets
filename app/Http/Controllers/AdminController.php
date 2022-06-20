<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        /* $inventario = Inventario::all(); */
        return view('admin.index');
    }

    public function create(/* Request $request */){

     /*    $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'id' => 'required',
            'descripcion' => 'required',
            'localidad' => 'required'
        ]);

        $inventario = new Inventario();

        $inventario->nombre = $request->nombre;
        $inventario->marca = $request->marca;
        $inventario->id = $request->id;
        $inventario->descripcion = $request->descripcion;
        $inventario->localidad = $request->localidad;

        $inventario->save(); */
        
        return view('admin.create');
    }

    public function update(){
        return view('admin.update')
;    }

    public function delete(){

    }
}
