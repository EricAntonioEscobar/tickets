<?php

namespace App\Http\Controllers;

use App\Mail\CorreosMasivosMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResetPassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reset_pass.form');
    }

    public function send(Request $request){
      $correo_count = User::select('email')->where('email',$request->email)->count();
      if($correo_count >= 1){

            $user = User::where('email',$request->email)->first();

            $correo = new CorreosMasivosMailable($user->email);

            Mail::to($user)->send($correo);
            
          if($correo){
             return redirect()->route('login.index')->with('alert','Correo enviado con exito');
          }
          
      }else{
        return back()->with('alert2', 'El correo electronico no se encuentra registrado'); 
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $correo = $request->email;
        return view('emails.form', compact('correo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        $user->email = $request->email;
        $user->save();
        return redirect()->route('login.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
