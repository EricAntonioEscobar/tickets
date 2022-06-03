@extends('layouts.new_pass')

@section('title', 'Reset password')

@section('content')
@if (session('alert2'))
<div class="alert bg-red-700 border-teal-500 rounded-b text-white text-teal-900 px-4 py-3 shadow-md" role="alert">
        {{ session('alert2') }}
</div>
@endif
<div style="margin-top: 100px" class="block mx-auto my-12 p-8 bg-white max-w-md border-gray-200 rounded-lg shadow-lg">
<form class="w-full max-w-sm" action="{{route('update.password')}}" method="POST">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
         Contraeña
        </label>
      </div>
      <div class="md:w-2/3">
        <input type="text" name="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" required>
        <input type="hidden" name="user" value="{{ $user }}">
      </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
           Confirmar contraseña
          </label>
        </div>
        <div class="md:w-2/3">
          <input type="password" name="password2" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" required>
        </div>
      </div>
      <input type="hiden" name="correo" value="">
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button type="submit" class="text-sm shadow bg-blue-900 hover:bg-indigo-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-7 rounded" type="button">
          Restablecer contraseña
        </button>
      </div>
    </div>
  </form>

</div>

@endsection