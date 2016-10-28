<div class="form-group">
    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
    {!! Form::label('nombre','Nombre del producto (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('nombre',(isset($producto)? $producto->nombre: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'nombre', 'required'=>'required']) !!}

</div>

<div class="form-group">
    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    {!! Form::label('descripcion','Descripcion (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('descripcion',(isset($producto)? $producto->descripcion: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'descripcion', 'required'=>'required' ]) !!}


</div>

<div class="form-group">

    <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> 
    {!! Form::label('codigo_barra',' Codigo de Barras (*) ',['class'=> "form-label-cms-3"]) !!}


    {!! Form::number('codigo_barra',(isset($producto)? $producto->codigo_barra: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'codigo_barra', 'required'=>'required', 'min'=>'1000000000000', 'max'=>'9999999999999']) !!}

</div>

<div class="form-group">
    {!! Form::label('metodo','Metodo de Pago del Producto (*) ',['class'=> "form-label-cms-3" ]) !!}

    {!! Form::select('metodo',['' => 'Seleccione un metodo'] + $metodos->toArray(),(isset($metodo)? $producto->metodo_id: null),['id' => 'id_metodo,'class'=>'form-control',(isset($ver)? 'disabled': null )]) !!}

</div>

@if(isset($ver))
    <div class="form-group">
        <img class="img-responsive" alt="Responsive image" src="/imagenes/productos/{{ $producto->imagen}}"> 
    </div>

@endif
<a href="{{ route('compras.show') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Confirmar</a>

<a href="{{ route('producto.index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</a>
