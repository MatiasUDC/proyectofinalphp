@extends('template.layout')
@section('titulo', 'Listado de Personas')
@section('content') 

        <div class = 'container'>
            <h1>Listado de Personas</h1>
            <form class = 'col s3' method = 'get' action = '{{url("persona")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Agregar Nueva Persona</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>dni</th>
                    
                    <th>nombre</th>
                    
                    <th>apellido</th>
                    
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
                        
                        <td>{{$Persona->nombre}}</td>
                        
                        <td>{{$Persona->apellido}}</td>
                        
                        <td>{{$Persona->fecha_nac}}</td>
                        
                        <td>{{$Persona->genero}}</td>
                        
                        <td>{{$Persona->telefono}}</td>
                        
                        <td>{{$Persona->id_pais}}</td>
                        
                        <td>{{$Persona->direccion}}</td>
                        
                        <td>{{$Persona->estado}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/persona/{{$Persona->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/persona/{{$Persona->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/persona/{{$Persona->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
    </body>




@endsection


