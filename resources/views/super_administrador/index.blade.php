@extends('layouts.super_admin_template')

@section('title', 'Super Administrador')

@section('content')

    <div class="container">
      <div class="d-flex justify-content-center" style="margin-top: 30px">

          <form class="w-100">
              <label class="font-weight-bold" for="exampleFormControlInput1">Nombre</label>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre(s)" required>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido paterno" required>
                <div style="width: 20px"></div>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido paterno" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="font-weight-bold">Numero de empleado</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="font-weight-bold">Correo</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1" class="font-weight-bold">Role</label>
                <select class="form-control" id="exampleFormControlSelect1" required>
                    <option disabled selected value> -- Selecciona una opción -- </option>
                  <option value="e">Empleado</option>
                  <option value="">Adminisrador</option>
                  <option value="">Super Administrador</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="font-weight-bold">Contraseña</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" required>
              </div>
          <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary btn-lg btn-block">Registrar usuario</button>
          </div>
            </form>
          
      </div>
    </div>

@endsection