@extends('layouts.empleados_template')

@section('title', 'Empleado')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center" style="margin-top:50px">

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

  @endsection