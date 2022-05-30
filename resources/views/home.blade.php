@extends('layouts.empleados_template')

@section('title', 'Empleado')

@section('content')

<section class="perfil_id" id="perfil_id" style="background-color: #f8f9fa;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-blacks"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5>{{auth()->user()->name}}</h5>
                <p>Programador</p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Datos generales</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Correo</h6>
                      <p class="text-muted">eescobar@gruponach.com</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Celular</h6>
                      <p class="text-muted">5510914253</p>
                    </div>
                  </div>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Area</h6>
                      <p class="text-muted">TI</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Equipos en propiedad</h6>
                      <p class="text-muted">0</p>
                    </div>
                  </div>

                </div>
              </div>
              <div class="w-100 text-center">
                <img class="mt-20" height="150" width="90%" src="/images/firma.jpeg" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="table_equipos" style="display: none; margin-top:40px;">
    <div id="container-table">
      <div class="d-flex justify-content-center table">
        <div class="table-responsive" style="width: 90%">
            <table class="table table-hover table-dark text-center">
                <thead>
                    <tr>
                        <th>Codigo de producto</th>
                        <th>Equipo</th>
                        <th>Status</th>
                        <th>Asunto</th>
                        <th>Fecha</th><th>
                    </tr>
                </thead>
                <tbody class="text-center">
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
  </section>

  <section id="form_solicitar" style="display: none; margin-top:40px;">
      <div class="container">
        <div class="d-flex justify-content-center">

            <form class="w-100">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Correo electronico</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Equipos disponibles</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Mac</option>
                    <option>Asus</option>
                    <option>Iphone</option>
                    <option>Xiaomi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Asunto</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
              </form>
            
        </div>
      </div>
  </section>

@endsection