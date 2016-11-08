@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Compra {{ $compra->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($compra, [
                            'method' => 'PATCH',
                            'url' => ['/compra', $compra->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                                    <div class="form-group {{ $errors->has('cant_producto') ? 'has-error' : ''}}">
                {!! Form::label('cant_producto', 'Cant Producto', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('cant_producto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cant_producto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('monto_total') ? 'has-error' : ''}}">
                {!! Form::label('monto_total', 'Monto Total', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('monto_total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('monto_total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('reservado') ? 'has-error' : ''}}">
                {!! Form::label('reservado', 'Reservado', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                                <div class="checkbox">
                <label>{!! Form::radio('reservado', '1') !!} Si</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('reservado', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('reservado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit('Actualizar Compra', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection