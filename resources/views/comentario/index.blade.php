@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Comentario</div>
                    <div class="panel-body">

                        <a href="{{ url('/comentario/create') }}" class="btn btn-primary btn-xs" title="Add New Comentario"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Id Usuario </th><th> Id Producto </th><th> Comentario </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comentario as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->id_usuario }}</td><td>{{ $item->id_producto }}</td><td>{{ $item->comentario }}</td>
                                        <td>
                                            <a href="{{ url('/comentario/' . $item->id) }}" class="btn btn-success btn-xs" title="View Comentario"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/comentario/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Comentario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/comentario', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Comentario" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Comentario',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $comentario->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection