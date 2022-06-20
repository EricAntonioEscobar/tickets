@extends('layouts.admin_template')

@section('title', 'Administrador')

@section('content')

  <div class="container">
    <div class="d-flex justify-content-center">

        <form class="w-100" style="margin-top: 20px">
            <div class="form-group">
              <label for="exampleFormControlInput1">Codigo de producto</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Escribe el codigo del producto">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Marca</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option disabled selected value> -- Selecciona una opción modelo -- </option>
                <option>Mac</option>
                <option>Asus</option>
                <option>Iphone</option>
                <option>Xiaomi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Nombre</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribe el nombre del producto">
            </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary btn-lg btn-block">Actualizar</button>
        </div>
          </form>
        
    </div>
  </div>

  @endsection