@extends('layouts.empleados_template')

@section('title', 'Empleado')

@section('content')

<div id="container-table">
    <div class="d-flex justify-content-center table" style="margin-top:50px">
      <div class="table-responsive" style="width: 90%">
          <table class="table table-hover table-dark">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Equipo</th>
                      <th>Status</th>
                      <th>Asunto</th>
                      <th>Fecha</th><th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Clark</td>
                      <td>Kent</td>
                      <td>Kent</td>
                      <td>clarkkent@mail.com</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Peter</td>
                      <td>Parker</td>
                      <td>Kent</td>
                      <td>peterparker@mail.com</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>John</td>
                      <td>Carter</td>
                      <td>Kent</td>
                      <td>johncarter@mail.com</td>
                  </tr>
              </tbody>
          </table>
       </div>
      </div>   
  </div>     
</div>

@endsection
