@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS 
				<a href="{{ url('producto/create') }}" class="btn btn-warning">
					<i class="fa fa-plus-circle"></i> Producto
				</a>
			</h1>
		</div>
		<div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                          
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Descripcion</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Visible</th>
                              <th>Editar</th>
                            <th>Eliminar</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                
                                <td><img src="{{ $product->imagen }}" width="40"></td>
                                <td>{{ $product->nombre }}</td>

                                <td>{{ $product->categoria->nombre }}</td>

                                <td>{{ $product->descripcion }}</td>
                                <td>{{ $product->stock }}</td>

                                <td>${{ number_format($product->precio,2) }}</td>

                                <td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
                            



                                <!-- botn donde se edita-->

                                <td>
                                    <a href="{{ url('/producto/' . $product->id . '/edit') }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                </td>





                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/producto', $product->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                 <td>    
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    {!! Form::close() !!}

                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <hr>
            
            <?php echo $products->render(); ?>
            
        </div>

	</div>
	
@stop