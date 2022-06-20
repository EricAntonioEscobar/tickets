@extends('layouts.ti_template')

@section('title', 'Ti')

@section('content')

    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%; margin-top:50px">
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

@endsection