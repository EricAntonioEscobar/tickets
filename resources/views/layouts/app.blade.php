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

    @yield('content')
</body>
</html>