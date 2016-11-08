@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Comentario {{ $comentario->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('comentario/' . $comentario->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Comentario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['comentario', $comentario->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Comentario',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $comentario->id }}</td>
                                    </tr>
                                    <tr><th> Id Usuario </th><td> {{ $comentario->id_usuario }} </td></tr><tr><th> Id Producto </th><td> {{ $comentario->id_producto }} </td></tr><tr><th> Comentario </th><td> {{ $comentario->comentario }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection