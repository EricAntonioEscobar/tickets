@extends('layouts.app')

@section('title', 'Reset password')

@section('content')

<div style="margin-top: 100px" class="block mx-auto my-12 p-8 bg-white max-w-md border-gray-200 rounded-lg shadow-lg">
    @if(session()->has('alert'))
    <div style="margin-top: -35px" class="text-center text-danger mb-2">
        {{ session()->get('alert') }}
    </div>
  @endif
<form class="w-full max-w-sm" action="{{ route('send.email') }}" method="post">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
         Correo electronico
        </label>
      </div>
      <div class="md:w-2/3">
        <input type="email" name="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button type="submit" class="text-sm shadow bg-blue-900 hover:bg-indigo-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-7 rounded" type="button">
          Enviar correo de recuperación
        </button>
          <div class="mt-5">
             <a href="{{ URL::previous() }}">Volver</a>
          </div>
      </div>
    </div>
  </form>
</div>

@endsection