@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Producto  Nro. {{ $producto->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($producto, [
                            'method' => 'PATCH',
                            'url' => ['/producto', $producto->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                                    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>





     
    <div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">

    {!! Form::label('categoria', 'Categoria:', ['class' => 'col-md-4 control-label']) !!}



          <div class="col-md-6">

         <select class="form-control" name="categoria_id" >


                        <option value=""> Seleccione Categoria: </option>


            @foreach($categoria as $categorias)
              <option value="{{$categorias->id}}">{{$categorias->nombre}}   </option>
             @endforeach
             </select>
        @if ($errors->has('categoria_id')? 'has-error':'')

              {!! $errors->first('id','categoria_id', '<p class="help-block">:message</p>') !!}
          @endif
            


         </div>
    </div>



       <div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
                {!! Form::label('imagen', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>



      






            <!--

            <div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
                {!! Form::label('imagen', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

-->




            <div class="form-group {{ $errors->has('stock') ? 'has-error' : ''}}">
                {!! Form::label('stock', 'Stock', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('stock', null, ['class' => 'form-control',]) !!}
                    {!! $errors->first('stock', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
                {!! Form::label('precio', 'Precio:   $', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                        
            <div class="form-group">
                 <div class="row">
                        <div class="col-md-offset-4 col-md-1">
                            
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-primary']) !!}


                        </div>
                        <div class="col-md-offset-2 col-md-1">
                            <a href="/producto">

                            <button type="button" class="btn btn-warning">Cancelar</button>
</a>
                        </div>
                </div>
            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection