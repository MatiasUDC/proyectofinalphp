@extends('admin.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <small>[Editar producto]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
                

                        {!! Form::model($product, [
                            'method' => 'PATCH',
                            'url' => ['/producto', $product->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}



                    
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group">
                            <label class="control-label" for="categoria_id">Categoría</label>
                            {!! Form::select('categoria_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            
                            {!! 
                                Form::text(
                                    'nombre', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                  


                        
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            
                            {!! 
                                Form::textarea(
                                    'descripcion', 
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Precio:</label>
                            
                            {!! 
                                Form::text(
                                    'precio', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el precio...',
                                    )
                                ) 
                            !!}
                        </div>


                         <div class="form-group">
                            <label for="price">Nro Stock:</label>
                            
                            {!! 
                                Form::text(
                                    'stock', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el stock...',
                                    )
                                ) 
                            !!}
                        </div>


                        
                        <div class="form-group">
                            <label for="image">Imagen:</label>
                            
                            {!! 
                                Form::text(
                                    'imagen', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la url de la imagen...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="visible">Activo:</label>
                            <input type="checkbox" name="visible" {{ $product->activo == 1 ? "checked='checked'" : '' }}>
                        </div>
                
                        
                        
                        
                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ url('/producto') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

	</div>

@stop