<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('title')</title>
    @include('scripts.show')
    <style>
        body{
            background: #f8f9fa;
        }
        @media only screen and (max-width: 988px) {
  .a_prueba{
   color: white;
   background: #003b7b;
   padding: 0;
   margin: 0; 
   border: none;

  }
}
    </style>
    
  </head>
  <body> 
     <nav class="navbar navbar-expand-lg" style="background: #003b7b">
        <a class="navbar-brand text-white font-weight-bold" style="font-size: 30px;" href="#">NACH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
                <i widt class="fa fa-bars fa-2x text-white" aria-hidden="true"></i>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav mr-0">
            <li class="nav-item">
                <a class="nav-link text-white" onclick="Prestamos();" href="#">Prestamos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" onclick="Usuarios();" href="#">Usuarios</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link text-white" onclick="EquiposAsignados();" href="#">Equipos asignados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" onclick="DatosPersonales();" href="#">Datos personales</a>
              </li> --}}
            <li class="nav-item">
                <a class="btn btn-danger a_prueba" href="{{route('logout.destroy')}}">Cerrar Sesión</a>
              </li>
          </ul>
        </div>
      </nav>
      
    @yield('content')

    <footer class="bg-dark text-center text-white fixed-bottom">

        <div class="text-center p-3 font-weight-bold" style="background-color: #002955;">
          © 2022 Copyright:
          <a class="text-white" href="https://www.gruponach.com/">gruponach.com</a>
        </div>

      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>