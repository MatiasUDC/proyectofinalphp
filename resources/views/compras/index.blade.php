@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(isset($productos))
                    <div class="form-group">
                        <h1>Listado de Compras Realizadas </h1>
                        <br>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   <th>Usuario</th>
                                   <th>Producto</th>
                                   <th>Metodo de Pago</th>
                                   <th>Monto</th>
                                   <th colspan="3">Acciones</th> 
                               </tr>
                           </thead>
                           <tfoot>
                            <tr>


                            </tr>
                        </tfoot>

                        <tbody>

                           @foreach ($compras as $compra)

                           <tr>
                            <td>{{ $compra->usuario }}</td>
                            <td>{{ $compra->producto }}</td>
                            <td>{{ $compra->metodo }}</td>
                            <td>{{ $compra->monto}}</td>
                        </tr>
                        
                        <td>
                            <a href='{{route('compra.edit',$compra->id)}}' class="btn btn-info"><span class="glyphicon glyphicon-usd"></span></a>
                        </td>
                        <td>
                            <a href='{{route('compra.show',$compra->id)}}' class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>

                        </td>
                        <td>
                            {{ Form::model($producto, ["method" => "delete", "route" => ["producto.destroy", $producto->id], "class" =>"form-inline form-delete"]) }}
                            {{ Form::button("<span class='glyphicon glyphicon-trash'></span>", array("type" => "submit", "class" => "btn btn-danger delete")) }}
                            {{ Form::close()}}
                        </td>


                        @endforeach
                    </tbody>
                </table>

                {{ $compras->render() }}

            </div>
            @endif
        </div>
    </div>
</div>
</div>
</div>
@endsection
