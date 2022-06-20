@extends('layouts.empleados_template')

@section('title', 'Empleado')

@section('content')

<section class="perfil_id" id="perfil_id">
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
  
@endsection