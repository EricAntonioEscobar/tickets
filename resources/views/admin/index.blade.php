@extends('layouts.admin_template')

@section('title', 'Administrador')

@section('content')

<section style="margin-top:50px; margin-left:100px;">
   <div id="container-btns">
         <div class="d-flex justify-content-rigth table">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-dark" onclick="Computadoras();">Computadoras</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-dark" onclick="Celulares();">Celulares</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-dark" onclick="Otros();">Otros</button>
                </div>

         </div>
    </div>
 </div>
</section>

<section id="table_inventario" style="margin-top:10px;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <h3 style="background: black;" class="text-center text-white font-weight-bold mb-0">INVENTARIO</h3>
            <table class="table table-hover table-dark text-center">
                <thead>
                    <tr>
                        <th>Código de producto</th>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Estatus</th>
                        <th>Asignación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>45432545</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524554</td>
                        <td>Peter</td>
                        <td>Kent</td>
                        <td>peterparker@mail.com</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524525</td>
                        <td>John</td>
                        <td>Kent</td>
                        <td>johncarter@mail.com</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
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

<section id="table_celulares" style="margin-top:10px; display:none;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <h3 style="background: black;" class="text-center text-white font-weight-bold mb-0">CELULARES</h3>
            <table class="table table-hover table-dark text-center">
                <thead>
                    <tr>
                        <th>Código de producto</th>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>IMEI</th>
                        <th>Estatus</th>
                        <th>Asignación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>45432545</td>
                        <td>Clark</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524554</td>
                        <td>Peter</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>peterparker@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524525</td>
                        <td>John</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>johncarter@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
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

<section id="table_compus" style="margin-top:10px; display:none;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <h3 style="background: black;" class="text-center text-white font-weight-bold mb-0">COMPUTADORAS</h3>
            <table class="table table-hover table-dark text-center"> 
                <thead>
                    <tr>
                        <th>Código de producto</th>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Procesador</th>
                        <th>Ram</th>
                        <th>Estatus</th>
                        <th>Asignación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>45432545</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>clarkkent@mail.com</td>
                        <td>Kent</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524554</td>
                        <td>Peter</td>
                        <td>Kent</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>peterparker@mail.com</td>
                        <td>Kent</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524525</td>
                        <td>John</td>
                        <td>Kent</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>johncarter@mail.com</td>
                        <td>Kent</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
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

<section id="table_otros" style="margin-top:10px; display:none;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <h3 style="background: black;" class="text-center text-white font-weight-bold mb-0">OTROS</h3>
            <table class="table table-hover table-dark text-center"> 
                <thead>
                    <tr>
                        <th>Código de producto</th>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Estatus</th>
                        <th>Asignación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>45432545</td>
                        <td>Clark</td>
                        <td>Kent</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524554</td>
                        <td>Peter</td>
                        <td>Kent</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-undo text-white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>524525</td>
                        <td>John</td>
                        <td>Kent</td>
                        <td>Kent</td>
                        <td>clarkkent@mail.com</td>
                        <td>
                            <a href=""><i class="fa fa-minus-circle text-white mr-2" aria-hidden="true"></i></a>
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

@endsection