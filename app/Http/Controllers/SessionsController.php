<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors(['message' => 'Error']);
        }else{
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            }
            if(auth()->user()->role == 'empleado'){
                return redirect()->route('empleado.index');
            }
            if(auth()->user()->role == 'SuperAdmin'){
                return redirect()->route('super_administrador.index');
            }
            if(auth()->user()->role == 'ti'){
                return redirect()->route('ti.usuarios');
            }
        }
        
    }

    public function destroy(){
        auth()->logout();
        return redirect()->route('home');
    }
}
