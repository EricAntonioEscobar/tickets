@extends('layouts.admin_template')

@section('title', 'Administrador')

@section('content')

  <div class="container">
    <div class="d-flex justify-content-center">

        <form class="w-100" style="margin-top: 10px">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Nombre</label>
            <input type="text" class="form-control" name="nombre" id=nombre" placeholder="Escribe el nombre del producto">
          </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Marca</label>
              <select class="form-control" name="marca" id="marca">
                <option disabled selected value> -- Selecciona una opción modelo -- </option>
                <option>Mac</option>
                <option>Asus</option>
                <option>Iphone</option>
                <option>Xiaomi</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Modelo</label>
              <input type="email" class="form-control" id="modelo" name="modelo" placeholder="Escribe el modelo">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Numero de serie</label>
              <input type="email" class="form-control" id="id" placeholder="Escribe el codigo del producto">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Descripción</label>
              <br>
              <textarea style="width: 100%" name="descripcion" id="descripcion" rows="4"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Localidad</label>
              <br>
              <input type="email" class="form-control" name="localidad" id="localidad" placeholder="Escribe la localidad">
            </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary btn-lg btn-block">Registrar</button>
        </div>
          </form>
        
    </div>
  </div>

  @endsection