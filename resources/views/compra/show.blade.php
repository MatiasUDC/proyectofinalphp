@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Compra {{ $compra->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('compra/' . $compra->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Compra"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['compra', $compra->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Compra',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $compra->id }}</td>
                                    </tr>
                                    <tr><th> Cant Producto </th><td> {{ $compra->cant_producto }} </td></tr><tr><th> Monto Total </th><td> {{ $compra->monto_total }} </td></tr><tr><th> Reservado </th><td> {{ $compra->reservado }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection