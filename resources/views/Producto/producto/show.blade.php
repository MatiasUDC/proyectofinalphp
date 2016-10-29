@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Producto {{ $producto->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('producto/' . $producto->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Producto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['producto', $producto->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Producto',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $producto->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $producto->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $producto->descripcion }} </td></tr><tr><th> Imagen </th><td> {{ $producto->imagen }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection