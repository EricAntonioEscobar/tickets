<?php

namespace App\Http\Controllers;

use App\Mail\CorreosMasivosMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CorreosController extends Controller
{
    public function index(){
      return view('emails.contactanos');
    }

    public function store(){

      $users = User::all();

      foreach ($users as $user){
      $correo = new CorreosMasivosMailable;
      Mail::to($user->email)->send($correo);
         }
    if($correo){
       return back()->with('alert','Correos enviados con exito');
    }
    } 


}
