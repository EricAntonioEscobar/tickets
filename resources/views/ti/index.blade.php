@extends('layouts.ti_template')

@section('title', 'Ti')

@section('content')

<section id="table_usuarios" style="margin-top:30px;display:none;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <h3 style="background: black;" class="text-center text-white font-weight-bold mb-0">Usuarios</h3>
            <table class="table table-hover table-dark text-center" id="tableUsuarios">
                <thead>
                    <tr>
                        <th>Numero de empleado</th>
                        <th>Nombre</th>
                        <th>Area</th>
                        <th>Correo</th>
                        <th>Conraseña</th>
                        <th>Firma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>45432545</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>********</td>
                        <td>
                            <a href=""><i class="fa fa-download text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-eye text-white mr-2"" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                        {{-- <td><a href=""><img width="25" src="/images/descargar.png" alt=""></a></td> --}}
                    </tr>
                    <tr>
                        <td>524554</td>
                        <td>Peter</td>
                        <td>Kent</td>
                        <td>peterparker@mail.com</td>
                        <td>********</td>
                        <td>
                            <a href=""><i class="fa fa-download text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-eye text-white mr-2"" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524525</td>
                        <td>John</td>
                        <td>Kent</td>
                        <td>johncarter@mail.com</td>
                        <td>********</td>
                        <td>
                            <a href=""><i class="fa fa-download text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-eye text-white mr-2"" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
         </div>
        </div>   
    </div>     
</div>
</section>

<section id="table_prestamos" style="margin-top:30px;display:none;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <h3 style="background: black;" class="text-center text-white font-weight-bold mb-0">Prestamos</h3>
            <table class="table table-hover table-dark text-center">
                <thead>
                    <tr>
                        <th>Codigo de producto</th>
                        <th>Equipo</th>
                        <th>Usuario</th>
                        <th>Area</th>
                        <th>Responsiva</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>45432545</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-download text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-eye text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524554</td>
                        <td>Peter</td>
                        <td>Kent</td>
                        <td>peterparker@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-download text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-eye text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524525</td>
                        <td>John</td>
                        <td>Kent</td>
                        <td>johncarter@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-download text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-eye text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
         </div>
        </div>   
    </div>     
</div>
</section>

<section id="firmas" style="display: none; margin-top:40px;">
    <div class="container">
      <div class="d-flex justify-content-center">

      </div>
    </div>
</section>

<section>
    
</section>


@endsection