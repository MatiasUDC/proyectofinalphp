@extends('template.layout_master')
@section('titulo', 'Mostrar Persona')
@section('content')
        <div class = 'container'>
            <h1>Mostrar Persona</h1>
            <form method = 'get' action = '{{url("persona")}}'>
                <button class = 'btn blue'>Listado de Personas</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>dni : </i></b>
                        </td>
                        <td>{{$persona->dni}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>apellido : </i></b>
                        </td>
                        <td>{{$persona->apellido}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nombre : </i></b>
                        </td>
                        <td>{{$persona->nombre}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fecha_nac : </i></b>
                        </td>
                        <td>{{$persona->fecha_nac}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>genero : </i></b>
                        </td>
                        <td>{{$persona->genero}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>telefono : </i></b>
                        </td>
                        <td>{{$persona->telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>id_pais : </i></b>
                        </td>
                        <td>{{$persona->id_pais}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>direccion : </i></b>
                        </td>
                        <td>{{$persona->direccion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>estado : </i></b>
                        </td>
                        <td>{{$persona->estado}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
@endsection
