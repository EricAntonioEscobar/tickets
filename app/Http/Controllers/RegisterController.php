<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required'

        ]);

        $user = User::create(request(['name', 'email', 'password','role']));
        auth()->login($user);
        if(auth()->user()->role == 'admin'){
            return redirect()->route('admin.index');
        }
        if(auth()->user()->role == 'empleado'){
            return redirect()->route('admin.empleado');
        }
        if(auth()->user()->role == 'SuperAdmin'){
            return redirect()->route('super_administrador.index');
        }
        if(auth()->user()->role == 'ti'){
            return redirect()->route('ti.index');
        }
    }
}
