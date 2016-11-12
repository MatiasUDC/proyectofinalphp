@extends('admin.template')

@section('content')

<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				CATEGORÍAS <a href="{{ url('/categoria/create') }}" class="btn btn-success">
				<i class="fa fa-plus-circle"></i> Categoría</a>

			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Editar</th>
							<th>Eliminar</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								
								<td>{{ $category->nombre }}</td>
								<td>{{ $category->descripcion }}</td>


								<td>
									<a href="{{ url('/categoria/' . $category->id . '/edit') }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>




									 {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/categoria', $category->id],
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
		</div>

	</div>

	@stop