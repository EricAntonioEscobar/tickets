<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800">

<nav class="flex py-5 bg-blue-900 text-white">
<div class="w-1/2 px-5 mr-auto">
    <p class="text-3xl font-bold">NACH</p>
</div>
<ul class="w-1/2 px-5 ml-auto flex justify-end pt-3">

@if (auth()->check())
<li class="flex-none">
    <a href="{{route('logout.destroy')}}" class="font-bold py-2 px-3 rounded-md bg-red-500 hover:bg-red-600">Cerrar sesion</a>
</li>
@else
<li class="mx-6 flex-none">
    <a href="{{route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-2 px-3 rounded-md">Iniciar Sesion</a>
</li>
<li class="flex-noe">
    <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px-3 rounded-md hover:bg-white hover:text-indigo-700">Registrarse</a>
</li>
@endif
</ul>
</nav>

@if (session('alert'))
<div class="alert bg-green-400 border-teal-500 rounded-b text-white text-teal-900 px-4 py-3 shadow-md" role="alert">
        {{ session('alert') }}
</div>
@endif

 @yield('content')
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@include('scripts.show')

</html>