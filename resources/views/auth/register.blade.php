@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white max-w-md border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3x1 text-center font-bold">Registro</h1>

    <form class="mt-4" method="post" action="">
        @csrf
       <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" name="name">

       @error('name')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p> 
       @enderror

       <select name="role" id="role" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
         <option selected>Selecciona un rol de usuario</option>
         <option value="SuperAdmin">Super administrador</option>
         <option value="admin">Administrador</option>
         <option value="ti">Ti</option>
         <option value="empleado">Empleado</option>
     </select>

       @error('role')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p> 
       @enderror


       <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" id="email" name="email">

       @error('email')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p> 
       @enderror

       <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">

       @error('password')
       <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p> 
       @enderror

       <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation">

       <button type="submit" class="rounded-md bg-blue-900 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 ">Registrar</button>
    </form>
</div>

@endsection