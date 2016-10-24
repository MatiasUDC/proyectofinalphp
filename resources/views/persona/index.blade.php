@extends('template.layout_master')
@section('titulo', 'Listado de Personas')
@section('content') 
        
        <div class = 'container'>
            <h1>Listado de Personas</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = '{{url("persona")}}/create'>
                <button class = 'btn red' type = 'submit'>Crear Nuevo Persona</button>
            </form>
                        </div>
            <table>
                <thead>
                    
                    <th>dni</th>
                    
                    <th>apellido</th>
                    
                    <th>nombre</th>
                    
                    <th>fecha_nac</th>
                    
                    <th>genero</th>
                    
                    <th>telefono</th>
                    
                    <th>id_pais</th>
                    
                    <th>direccion</th>
                    
                    <th>estado</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($personas as $Persona)

                    <tr>
                        
                        <td>{{$Persona->dni}}</td>
                        
                        <td>{{$Persona->apellido}}</td>
                        
                        <td>{{$Persona->nombre}}</td>
                        
                        <td>{{$Persona->fecha_nac}}</td>
                        
                        <td>{{$Persona->genero}}</td>
                        
                        <td>{{$Persona->telefono}}</td>
                        
                        <td>{{$Persona->id_pais}}</td>
                        
                        <td>{{$Persona->direccion}}</td>
                        
                        <td>{{$Persona->estado}}</td>
                        
                        
                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/persona/{{$Persona->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/persona/{{$Persona->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/persona/{{$Persona->id}}'><i class = 'material-icons'>info</i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="modal1" class="modal">
            <div class = "row AjaxisModal">
            </div>
        </div>
@endsection
   