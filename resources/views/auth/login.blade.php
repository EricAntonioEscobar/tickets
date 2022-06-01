@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white max-w-md border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3x1 text-center font-bold">Inicio de sesion</h1>

    <form class="mt-4" method="post" action="">
        @csrf
       <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" id="email" name="email">

       <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">

       @error('message')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*Error</p> 
       @enderror

       <button type="submit" class="rounded-md bg-blue-900 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 ">Ingresar</button>
       <a href="{{ route('reset.pass') }}">Olvide mi contraseña</a>
    </form>
</div>



@endsection