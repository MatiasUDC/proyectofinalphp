@extends('template.layout_master')
@section('titulo', 'Crear de Persona')
@section('content')
    
  <div class = 'container'>
            <h1>Crear Persona</h1>
            <form method = 'get' action = '{{url("persona")}}'>
                <button class = 'btn blue'>Listado de Personas</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("persona")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="dni" name = "dni" type="text" class="validate">
                    <label for="dni">dni</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="apellido" name = "apellido" type="text" class="validate">
                    <label for="apellido">apellido</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="nombre" name = "nombre" type="text" class="validate">
                    <label for="nombre">nombre</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="fecha_nac" name = "fecha_nac" type="text" class="validate">
                    <label for="fecha_nac">fecha_nac</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="genero" name = "genero" type="text" class="validate">
                    <label for="genero">genero</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="telefono" name = "telefono" type="text" class="validate">
                    <label for="telefono">telefono</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="id_pais" name = "id_pais" type="text" class="validate">
                    <label for="id_pais">id_pais</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="direccion" name = "direccion" type="text" class="validate">
                    <label for="direccion">direccion</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="estado" name = "estado" type="text" class="validate">
                    <label for="estado">estado</label>
                </div>
                
                
                <button class = 'btn red' type ='submit'>Crear</button>
            </form>

@endsection
