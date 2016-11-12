@extends('admin.template')

@section('content')
    
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                CATEGORÍAS <small>[Editar categoría]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
                  
                        {!! Form::model($categorium, [
                            'method' => 'PATCH',
                            'url' => ['/categoria', $categorium->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}



                        <input type="hidden" name="_method" value="PUT">
        
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
                           {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

                            <a href="{{ url('/categoria') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

    </div>

@stop