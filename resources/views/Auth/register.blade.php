@extends('store.template')

@section('content')
	<div class="container text-center">

		<div class="page-header">
		  <h1><i class="fa fa-user"></i> Registrarse</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="page">

				@include('store.partials.errors') 

					<form method="POST" action="/auth/register">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label for="nombre">Nombre</label>
					        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
					    </div>

					    <div class="form-group">
					        <label for="apellido">Apellidos</label>
					        <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
					    </div>

					    <div class="form-group">
					        <label for="email">Correo</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="user">Usuario</label>
					        <input class="form-control" type="text" name="user" value="{{ old('user') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Password</label>
					        <input class="form-control" type="password" name="password">
					    </div>

					    <div class="form-group">
					        <label for="password_confirmation">Confirmar Password</label>
					        <input class="form-control" type="password" name="password_confirmation">
					    </div>

					    <div class="form-group">
					        <label for="adrress">Dirección</label>
					        <textarea class="form-control" name="direccion">{{ old('direccion') }}</textarea>
					    </div>

					    <div class="form-group">
					        <label for="telefono">Dirección</label>
					        <textarea class="form-control" name="telefono">{{ old('telefono') }}</textarea>
					    </div>

					    <div class="form-group">
					        <button class="btn btn-primary" type="submit">Crear cuenta</button>
					    </div>
					</form>

				</div>
			</div>
		</div>
	</div>
@stop
